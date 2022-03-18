<?php

namespace App\Http\Controllers\Api;

use App\Time;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TimeResource;
use App\Http\Resources\TimeVaccinationResource;

class TimeController extends Controller
{
    public function index()
    {
        $time=Time::all();
        return (new TimeResource($time))->response()->setStatusCode(200);

    }
    public function show(Time $time)
    {
        return (new TimeVaccinationResource($time->vaccinations))->response()->setStatusCode(200);
    }
}
