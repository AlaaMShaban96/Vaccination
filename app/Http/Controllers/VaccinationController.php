<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccinationController extends Controller
{
    public function show()
    {
        return view('VaccinationCenters.index');
    }
    
}
