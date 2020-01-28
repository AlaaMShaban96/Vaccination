<?php

namespace App\Http\Controllers;

use App\Child;
use App\Order;
use App\Vaccination;
use Illuminate\Http\Request;
use App\AvailableVaccinations;

class VaccinationController extends Controller
{
    public function show()
    {    
        $vaccinations= AvailableVaccinations::where('user_id','=',5)->get();
        $child = Child::where('user_id','=',5)->get();
        $orders= Order::where('user_id', '=', 5);

    //    dd( $child->count());
        // $orders= Order::where('user_id', '=', 5)->where('status','=',2);
        return view('VaccinationCenters.index', compact('vaccinations','child','orders'));
    }
    public function showVaccinationAvailable()
    {
         $vaccinations =AvailableVaccinations::where('user_id','=',5)->paginate(8);
        return view('VaccinationCenters.vaccinationAvailable' ,compact('vaccinations'));

    }
}
