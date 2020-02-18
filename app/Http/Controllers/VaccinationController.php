<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use App\Child;
use App\Order;
use App\Vaccination;
use Illuminate\Http\Request;


class VaccinationController extends Controller
{ 
     public function show()
    {    
        // $user  = User::find(1);
        $children = Child::where('user_id','=',auth()->user()->id)->get();
        $orders= Order::where('user_id', '=', auth()->user()->id);
        $cities = City::all();
  
        return view('VaccinationCenters.index', compact('user','children','orders','cities'));
    }
    public function showVaccinationAvailable()
    {
        $user= User::find(1);
      
        return view('VaccinationCenters.vaccinationAvailable' ,compact('user'));

    }
    public function show_reports()
    {
        return view('VaccinationCenters.reports' );

    }











    

    // admin 

    public function index()
    {
        $vaccinations = Vaccination::all();
        return view('admin/Vaccinations',compact('vaccinations'));
    
    
    }
    
    
    
    
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'dose_time' => 'required',
            'quantity' => 'required',
            ]);
    // dd($request->dose_time);
            Vaccination::Create($request->all());
            
    
    }
    
    
    public function update(Request $request, $id)
    {   
        $this->validate($request, [
            'name' => 'required',
            'dose_time' => 'required',
            'quantity' => 'required',
        ]);
    
        $Vaccination= Vaccination::find($id);
        $Vaccination->name = $request->name;
        $Vaccination->dose_time = $request->dose_time;
        $Vaccination->quantity = $request->quantity;
    
        $Vaccination->save();
        return response()->json([ 'succeful'=>'تمت تعديل التطعيمة بنجاح'], 200);
    }
    
    
    
    
    
    
    
    
    
    
    
    

}
