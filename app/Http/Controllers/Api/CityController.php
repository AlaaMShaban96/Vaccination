<?php

namespace App\Http\Controllers\Api;

use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Http\Resources\CityUserResource;

class CityController extends Controller
{
    public function index()
    {
       $city= City::all();
        
        return (new CityResource($city))->response()->setStatusCode(200);
    }
    public function show($id)
    {
        $city= City::find($id);
        
        return (new CityUserResource($city->users))->response()->setStatusCode(200);
    }
}
