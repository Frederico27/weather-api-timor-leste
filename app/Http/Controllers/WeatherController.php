<?php

namespace App\Http\Controllers;

use App\Helper\HelperUtil;
use App\Http\Resources\CityResource;
use App\Http\Resources\CityResourceCollection;
use App\Models\City;
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
        $cities_data = [];
        foreach ($cities as $city) {
            $url = $this->baseUrl . "latitude=" . $city->lat . "&longitude=" . $city->lng . $this->tailUrl;

            $response = HelperUtil::parseMeteoAllData($url);
            $object_response = HelperUtil::wrapData($city, $response);
            $cities_data[] = $object_response;
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
