<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $city = $request->get('city', 'tehran');

        $location = Http::get('https://api.openweathermap.org/geo/1.0/direct', [
            'appid' => env('WEATHER_APP_KEY'),
            'q' => $city,
            'limit' => 1
        ])->json()[0];

        $response = Http::get('https://api.openweathermap.org/data/2.5/onecall', [
            'appid' => env('WEATHER_APP_KEY'),
            'lat' => $location['lat'],
            'lon' => $location['lon'],
            'units' => 'metric',
        ]);

        return view('weather')
            ->with('weather', $response->json())
            ->with('location', $location);
    }
}
