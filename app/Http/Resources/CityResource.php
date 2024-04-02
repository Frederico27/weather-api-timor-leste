<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
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
            "tempu" => $this->tempu,
            "temperatura_2m" => $this->temperatura_2m,
            "umidade_2m" => $this->umidade_2m,
            "presipitasaun" => $this->presipitasaun,
            "udan" => $this->udan,
            "kodigu_klima" => $this->kodigu_klima,
            "kalohan_taka" => $this->kalohan_taka,
            "presaun_tasi" => $this->presaun_tasi,
            "presaun_rai" => $this->presaun_rai,
            "velosidade_anin_10m" => $this->velosidade_anin_10m
        ];
    }
}
