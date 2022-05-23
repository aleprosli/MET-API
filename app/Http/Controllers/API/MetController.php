<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class MetController extends Controller
{
    //General Forecast
    public function index()
    {
        try {
            
            $url = config('services.met.url');

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => config('services.met.authorization'),
            ])->get($url);

            return $response;

        } catch (Exception $e) {

            return response()->error($e->getMessage(),true);

        }
    }

    public function warning()
    {

    }

    public function location()
    {

    }

    public function datatype()
    {

    }

    public function satelliteRadarImage()
    {

    }
}
