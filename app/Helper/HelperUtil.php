<?php

namespace App\Helper;

use App\Models\City;
use DateTime;
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

    public static function convertDailyTime($response)
    {
        $data = $response;

        foreach ($data as $sun) {
            $result[] = Carbon::parse($sun)->setTimezone('UTC')->format('Y-m-d H:i:s');
        }

        return $result;
    }

    public static function concateArray($response, $format)
    {
        $data = $response;

        foreach ($data as $sun) {
            $result[] = $sun . " " . $format;
        }

        return $result;
    }

    //resource of data wraping
    public static function wrapData(City $city, $response): stdClass
    {
        //array store the response
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

    public static function wrapDailyData(City $city, $response): stdClass
    {

        $response_result = [
            'id' => $city->id,
            'munisipiu' => $city->name,
            "tempu" => $response->daily->time,
            'kodigu_klima' => $response->daily->weather_code,
            "temperatura_2m_max" => HelperUtil::concateArray($response->daily->temperature_2m_max, '°C'),
            "temperatura_2m_min" => HelperUtil::concateArray($response->daily->temperature_2m_min, '°C'),
            "uv_index" => $response->daily->uv_index_max,
            "presipitasaun_sum" => HelperUtil::concateArray($response->daily->precipitation_sum, 'mm'),
            "udan_sum" => HelperUtil::concateArray($response->daily->rain_sum, 'mm'),
            "velosidade_anin_10m" => HelperUtil::concateArray($response->daily->wind_speed_10m_max, 'km/h'),
            "sunrise" => HelperUtil::convertDailyTime($response->daily->sunrise),
            "sunset" => HelperUtil::convertDailyTime($response->daily->sunset)
        ];

        //convert an array to object
        $object_response = (object) $response_result;

        //return the data
        return $object_response;
    }


    public static function wrapHourlyData(City $city, $response): stdClass
    {
        $response_result = [
            'id' => $city->id,
            'munisipiu' => $city->name,
            "tempu" => HelperUtil::filterNextFiveHoursData($response->hourly->time),
            'kodigu_klima' => HelperUtil::filterNextFiveHoursData($response->hourly->weather_code),
            "temperatura_2m" => HelperUtil::filterNextFiveHoursData($response->hourly->temperature_2m),
            "umidade" => HelperUtil::filterNextFiveHoursData($response->hourly->relative_humidity_2m),
            "presipitasaun" => HelperUtil::filterNextFiveHoursData($response->hourly->precipitation),
            "udan_sum" => HelperUtil::filterNextFiveHoursData($response->hourly->rain),
            "velosidade_anin_10m" => HelperUtil::filterNextFiveHoursData($response->hourly->wind_speed_10m),
            "kalohan_taka" => HelperUtil::filterNextFiveHoursData($response->hourly->cloud_cover),
            "presaun_rai" => HelperUtil::filterNextFiveHoursData($response->hourly->pressure_msl),
            "presaun_tasi" => HelperUtil::filterNextFiveHoursData($response->hourly->surface_pressure)
        ];

        //convert an array to object
        $object_response = (object) $response_result;

        //return the data
        return $object_response;
    }

    private static function filterNextFiveHoursData($data_json)
    {
        date_default_timezone_set("Asia/Dili");
        $timestamp = time(); // atau dapatkan timestamp dari sumber waktu lainnya
        $dateTime = new DateTime("@$timestamp");
        $iso8601 = $dateTime->format('c');

        $current_time = $iso8601;

        // Mengonversi waktu saat ini ke timestamp
        $timestamp = strtotime($current_time);

        // Membulatkan ke jam berikutnya
        $rounded_time = date('Y-m-d\TH:00', ceil($timestamp / 3600) * 3600);

        // Mencari waktu saat ini dalam data JSON
        $index = array_search($rounded_time, $data_json);

        $now_hours_data = array_slice($data_json, $index + 8, 10, true);
        // Mengatur kembali kunci-kunci array
        $now_hours_data = array_values($now_hours_data);

        return $now_hours_data;
    }

    public static function filterInputCity($city_name)
    {
        $city_name = strtolower($city_name);
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
