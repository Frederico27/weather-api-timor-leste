<?php

use App\Http\Controllers\CurrentWeatherController;
use App\Http\Controllers\DailyWeatherController;
use App\Http\Controllers\HourlyWeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/klima', [CurrentWeatherController::class, 'getAllCurrentWeather']);
Route::get('/klima/{name}', [CurrentWeatherController::class, 'getEachCurrentWeather']);
Route::get('/klima/diariu/{name}', [DailyWeatherController::class, 'getDailyWeather']);
Route::get('/klima/oras/{name}', [HourlyWeatherController::class, 'getHourlyWeather']);
