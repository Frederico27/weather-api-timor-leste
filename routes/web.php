<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyWeatherController;
use App\Http\Controllers\HourlyWeatherController;
use App\Http\Controllers\CurrentWeatherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/klima', [CurrentWeatherController::class, 'getAllCurrentWeather']);
Route::get('api/klima/{name}', [CurrentWeatherController::class, 'getEachCurrentWeather']);
Route::get('api/klima/diariu/{name}', [DailyWeatherController::class, 'getDailyWeather']);
Route::get('api/klima/oras/{name}', [HourlyWeatherController::class, 'getHourlyWeather']);
