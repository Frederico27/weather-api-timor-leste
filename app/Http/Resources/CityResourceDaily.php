<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResourceDaily extends JsonResource
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
            'kodigu_klima' => $this->kodigu_klima,
            "temperatura_2m_max" => $this->temperatura_2m_max,
            "temperatura_2m_min" => $this->temperatura_2m_min,
            "uv_index" => $this->uv_index,
            "presipitasaun_sum" => $this->presipitasaun_sum,
            "udan_sum" => $this->udan_sum,
            "velosidade_anin_10m" => $this->velosidade_anin_10m,
            "sunrise" => $this->sunrise,
            "sunset" => $this->sunset
        ];
    }
}
