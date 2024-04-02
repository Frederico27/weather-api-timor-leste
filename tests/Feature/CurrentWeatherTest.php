<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CurrentWeatherTest extends TestCase
{
    public function testWeatherByCity()
    {
        $value = $this->get('api/weather/dili');
        dd($value);
    }
}
