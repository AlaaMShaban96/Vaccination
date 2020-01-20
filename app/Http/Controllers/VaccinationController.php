<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccinationController extends Controller
{
    public function show()
    {
        return view('VaccinationCenters.index');
    }
    public function sendOrder()
    {
        return view('VaccinationCenters.send_an_order');
    }
    public function receiveOrder()
    {
        return view('VaccinationCenters.receive_an_order');
    }
}
