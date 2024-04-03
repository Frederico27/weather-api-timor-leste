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
        $cities = City::all();
        $promises = [];
        $client = new Client();

        foreach ($cities as $city) {
            $url = $this->baseUrl . "latitude=" . $city->lat . "&longitude=" . $city->lng . $this->tailUrl;
            $promises[$city->id] = $client->getAsync($url)->then(function ($response) use ($city) {
                $response = json_decode($response->getBody()->getContents());
                return HelperUtil::wrapData($city, $response);
            });
        }

        $responses = Promise\Utils::settle($promises)->wait();
        $cities_data = [];

        foreach ($responses as $cityId => $promise) {
            if ($promise['state'] === 'fulfilled') {
                $cities_data[] = $promise['value'];
            } else {
                // Handle errors
                return throw new HttpResponseException(response()
                    ->json(['errors' => 'Dadus la existe'])
                    ->setStatusCode(400));
            }
        }

        return new CityResourceCollection($cities_data);
    }

    public function getEachCurrentWeather(string $city_name): CityResource
    {
        $city_name = HelperUtil::filterInputCity($city_name);
        $city = City::where('name', $city_name)->first();
        if ($city) {
            $url = $this->baseUrl . "latitude=" . $city->lat . "&longitude=" . $city->lng . $this->tailUrl;

            $response = HelperUtil::parseMeteoData($url);
            $object_response = HelperUtil::wrapData($city, $response);

            return new CityResource($object_response);
        } else {
            return throw new HttpResponseException(response()
                ->json(['errors' => 'Dadus la existe'])
                ->setStatusCode(400));
        }
    }

    // public function HourlyApi(): JsonResponse
    // {
    // }
}
