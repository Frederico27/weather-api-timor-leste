<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data_cities = [
            [
                'name' => 'dili',
                'lat' => '-8.5586',
                'lng' => '125.5736',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'manufahi',
                'lat' => '-9.0042',
                'lng' => '125.6486',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'ainaro',
                'lat' => '-8.9924',
                'lng' => '125.5082',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'baucau',
                'lat' => '-8.4757',
                'lng' => '126.4563',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'lautem',
                'lat' => '-8.3642',
                'lng' => '126.9044',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'aileu',
                'lat' => '-8.7281',
                'lng' => '125.5664',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'likisa',
                'lat' => '-8.5875',
                'lng' => '125.3419',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'ermera',
                'lat' => '-8.7522',
                'lng' => '125.3969',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'bobonaru',
                'lat' => '-9.0319',
                'lng' => '125.325',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'manatutu',
                'lat' => '-8.5114',
                'lng' => '126.0131',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'vikeke',
                'lat' => '-8.8575',
                'lng' => '126.3647',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'kovalima',
                'lat' => '-9.3129',
                'lng' => '125.2565',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'oekusi',
                'lat' => '-9.2037',
                'lng' => '124.3569',
                'country' => 'Timor-Leste'
            ],

            [
                'name' => 'atauro',
                'lat' => '-8.2667',
                'lng' => '125.6014',
                'country' => 'Timor-Leste'
            ],
        ];
        foreach ($data_cities as $city) {
            City::create($city);
        }
    }
}
