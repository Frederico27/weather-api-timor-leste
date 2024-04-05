<?php

namespace App\Http\Resources;

use App\Helper\HelperUtil;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResourceHourly extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'munisipiu' => $this->munisipiu,
            "tempu" => HelperUtil::convertDailyTime($this->tempu),
            'kodigu_klima' => $this->kodigu_klima,
            "temperatura_2m" => HelperUtil::concateArray($this->temperatura_2m, '°C'),
            "umidade" => HelperUtil::concateArray($this->umidade, '%'),
            "presipitasaun" => HelperUtil::concateArray($this->presipitasaun, 'mm'),
            "udan_sum" => HelperUtil::concateArray($this->udan_sum, 'mm'),
            "velosidade_anin_10m" => HelperUtil::concateArray($this->velosidade_anin_10m, 'km/h'),
            "kalohan_taka" => HelperUtil::concateArray($this->kalohan_taka, '%'),
            "presaun_rai" => HelperUtil::concateArray($this->presaun_rai, 'hPa'),
            "presaun_tasi" => HelperUtil::concateArray($this->presaun_tasi, 'hPa')
        ];
    }
}
