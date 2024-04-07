<?php

namespace App\Http\Controllers;

use App\Helper\HelperUtil;
use App\Http\Resources\CityResourceHourlyCollection;
use App\Models\City;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class HourlyWeatherController extends Controller
{

    private string $baseUrl = "https://api.open-meteo.com/v1/forecast?";
    private $tailUrl = "&hourly=temperature_2m,relative_humidity_2m,precipitation,rain,weather_code,pressure_msl,surface_pressure,cloud_cover,wind_speed_10m";

    /**
     * @OA\Get(
     *     path="/api/klima/oras/{municipality}",
     *     summary="Get Each Hourly weather data from 14 municipalities",
     *     tags={"Hourly Weather Data"},
     *     @OA\Parameter(
     *         name="municipality",
     *         in="path",
     *         description="Name of the municipality to get weather data for",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=400, description="Invalid request")
     * )
     */
    public function getHourlyWeather($city_name): CityResourceHourlyCollection
    {
        $city_name = HelperUtil::filterInputCity($city_name);

        //Parsing city data from database
        $city = City::where('name', $city_name)->first();
        //create array of promise
        if ($city) {
            //create array of promise
            $promises = [];
            //initialize http client
            $client = new Client();
        } else {
            return throw new HttpResponseException(response()
                ->json(['errors' => 'Dadus la existe'])
                ->setStatusCode(400));
        }

        //url concatenation
        $url = $this->baseUrl . "latitude=" . $city->lat . "&longitude=" . $city->lng . $this->tailUrl;
        //get body and content with asyn method
        $promises[$city->id] = $client->getAsync($url)->then(function ($response) use ($city) {
            //decode it from json
            $response = json_decode($response->getBody()->getContents());
            //wrap the data
            return HelperUtil::wrapHourlyData($city, $response);
        });

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
        return new CityResourceHourlyCollection($cities_data);
    }
}
