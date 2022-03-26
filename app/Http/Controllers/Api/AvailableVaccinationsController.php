<?php

namespace App\Http\Controllers\Api;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;

class AvailableVaccinationsController extends Controller
{
    public function index()
    {
        $order=Order::where('status','=',3)->get();       
        return (new NewsResource($order))->response()->setStatusCode(200);
    }
}
