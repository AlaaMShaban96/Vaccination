<?php

namespace App\Http\Controllers;

use App\Order;
use App\Vaccination;
use Illuminate\Http\Request;

class OrderController extends Controller
{ 
    public function sendOrder()
    {
        $vaccinations =Vaccination::paginate(2);
        
        return view('VaccinationCenters.send_an_order', compact('vaccinations','index'));
    }
    public function receiveOrder()
    {
        $orders= Order::where('user_id', '=', 5)->where('status','=',2)->paginate(2);
        return view('VaccinationCenters.receive_an_order', compact('orders'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'vaccination_id' => 'required',
            'name' => 'required',
            'dose_time' => 'required',
            'quantity' => 'required',
        ]);
        Order::Create($validatedData);
        return response()->json(['succsful'=>'تم ارسال الطلب'], 200);
        
    }
}
