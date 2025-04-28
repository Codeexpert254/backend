<?php

use App\Models\User; // ✅ Add this
use App\Http\Resources\UserResource; // ✅ Add this
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/users', function (){
    return UserResource::collection(User::all());
});


Route::get('/weather/{city}', [WeatherController::class, 'getWeather']);
Route::get('/forecast/{city}', [WeatherController::class, 'getForecast']);


