<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather(Request $request, $city)
    {
        $units = $request->query('units', 'metric'); 

        $apiKey = env('OPENWEATHER_API_KEY');
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q' => $city,
            'units' => $units,
            'appid' => $apiKey,
        ]);

        return $response->json();
    }

    public function getForecast(Request $request, $city)
    {
        $units = $request->query('units', 'metric'); 

        $apiKey = env('OPENWEATHER_API_KEY');
        $response = Http::get('https://api.openweathermap.org/data/2.5/forecast', [
            'q' => $city,
            'units' => $units,
            'appid' => $apiKey,
        ]);

        return $response->json();
    }
}
