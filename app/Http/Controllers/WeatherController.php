<?php

namespace App\Http\Controllers;

use App\Helper\HelperUtil;
use App\Http\Resources\CityResource;
use App\Http\Resources\CityResourceCollection;
use App\Models\City;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WeatherController extends Controller
{

    //Default Value of URL
    public string $baseUrl = "https://api.open-meteo.com/v1/forecast?"; //Meteo URL
    public string $tailUrl = "&current=temperature_2m,relative_humidity_2m,precipitation,rain,weather_code,cloud_cover,pressure_msl,surface_pressure,wind_speed_10m&timezone=Asia%2FTokyo"; //Atrribute Meteo


    public function getAllCurrentWeather(): CityResourceCollection
    {
        //Parsing city data from database
        $cities = City::all();
        //create array of promise
        $promises = [];
        //initialize http client
        $client = new Client();

        //looping the cities data
        foreach ($cities as $city) {
            //url concatenation
            $url = $this->baseUrl . "latitude=" . $city->lat . "&longitude=" . $city->lng . $this->tailUrl;
            //get body and content with asyn method
            $promises[$city->id] = $client->getAsync($url)->then(function ($response) use ($city) {
                //decode it from json
                $response = json_decode($response->getBody()->getContents());
                //wrap the data
                return HelperUtil::wrapData($city, $response);
            });
        }

        //Make wait jobs for the data
        $responses = Promise\Utils::settle($promises)->wait();
        $cities_data = [];

        //looping the await data and store them into cities_data variable
        foreach ($responses as $cityId => $promise) {
            //make sure promise data is fulfiled if isn't throw exception errors
            if ($promise['state'] === 'fulfilled') {
                $cities_data[] = $promise['value'];
            } else {
                // Handle errors
                return throw new HttpResponseException(response()
                    ->json(['errors' => 'Dadus la existe'])
                    ->setStatusCode(400));
            }
        }

        //all data that have been got put in into CityResourceCollection and return it
        return new CityResourceCollection($cities_data);
    }

    public function getEachCurrentWeather(string $city_name): CityResource
    {
        //filter input url query data
        $city_name = HelperUtil::filterInputCity($city_name);
        //parsing city data from database
        $city = City::where('name', $city_name)->first();
        //if get the data return it into CityResource
        if ($city) {

            //url concatenation
            $url = $this->baseUrl . "latitude=" . $city->lat . "&longitude=" . $city->lng . $this->tailUrl;

            //parse the data from url
            $response = HelperUtil::parseMeteoData($url);
            //wrap the data
            $object_response = HelperUtil::wrapData($city, $response);

            //return to CityResource
            return new CityResource($object_response);
        } else {
            //if not throw an exception
            return throw new HttpResponseException(response()
                ->json(['errors' => 'Dadus la existe'])
                ->setStatusCode(400));
        }
    }

    // public function HourlyApi(): JsonResponse
    // {
    // }
}
