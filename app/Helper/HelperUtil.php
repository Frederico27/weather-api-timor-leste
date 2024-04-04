<?php

namespace App\Helper;

use App\Models\City;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Illuminate\Support\Carbon;
use stdClass;

class HelperUtil
{
    //http client method to parse of data
    public static function parseMeteoData($url): stdClass
    {
        $client = new Client();
        $response = $client->get($url)->getBody()->getContents();
        $response = json_decode($response);

        return $response;
    }

    //resource of data wraping
    public static function wrapData(City $city, $response): stdClass
    {
        $response_result = [
            'id' => $city->id,
            'munisipiu' => $city->name,
            "tempu" => Carbon::parse($response->current->time)->setTimezone('UTC')->format('Y-m-d H:i:s'),
            "temperatura_2m" => $response->current->temperature_2m . "°C",
            "umidade_2m" => $response->current->relative_humidity_2m . "%",
            "presipitasaun" => $response->current->precipitation . "mm",
            "udan" => $response->current->rain . "mm",
            "kodigu_klima" => $response->current->weather_code,
            "kalohan_taka" => $response->current->cloud_cover . "%",
            "presaun_tasi" => $response->current->pressure_msl . " hpa",
            "presaun_rai" => $response->current->surface_pressure . " hpa",
            "velosidade_anin_10m" => $response->current->wind_speed_10m . " km/h"
        ];

        //convert an array to object
        $object_response = (object) $response_result;

        //return the data
        return $object_response;
    }

    public static function filterInputCity($city_name)
    {
        //switch statement case of city name
        switch ($city_name) {
            case 'dili':
                return 'dili';

            case 'aileu':
                return 'aileu';

            case 'manatutu':
            case 'manatuto':
                return 'manatutu';

            case 'bobonaru':
            case 'bobonaro':
            case 'maliana':
                return 'bobonaru';

            case 'ermera':
                return 'ermera';

            case 'atauru':
            case 'atauro':
                return 'atauro';

            case 'liquisa':
            case 'likisa':
            case 'liquica':
            case 'likuisa':
                return 'likisa';

            case 'lospalos':
            case 'lautem':
                return 'lautem';

            case 'same':
            case 'manufahi':
                return 'manufahi';

            case 'ainaru':
            case 'ainaro':
                return 'ainaro';

            case 'baukau':
            case 'baucau':
                return 'baucau';

            case 'oecusse':
            case 'oekusse':
            case 'oekuse':
                return 'oekusi';

            case 'viqueque':
            case 'vikeke':
            case 'vikuekue':
                return 'vikeke';

            case 'suai':
            case 'kovalima':
            case 'covalima':
                return 'kovalima';

            default:
                return 'lahetan';
        }
    }
}
