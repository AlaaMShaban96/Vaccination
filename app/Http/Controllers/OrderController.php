<?php

namespace App\Http\Controllers;

use App\Order;
use App\Vaccination;
use Illuminate\Http\Request;
use App\AvailableVaccinations;

class OrderController extends Controller
{ 
    public function sendOrder()
    {
        $vaccinations =Vaccination::paginate(5);
        
        return view('VaccinationCenters.send_an_order', compact('vaccinations','index'));
    }
    public function receiveOrder($message= null)
    {
        
        $orders= Order::where('user_id', '=', 5)->where('status','=',2)->paginate(7);
        return view('VaccinationCenters.receive_an_order', compact('orders','message'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'vaccination_id' => 'required',
            'name' => 'required',
            'dose_time' => 'required',
            'quantity' => 'required |numeric|min:1|not_in:0 ',
           
        ]);
      
        
        Order::Create([
            'vaccination_id'=>$validatedData['vaccination_id'],
            'name'=>$validatedData['name'],
            'dose_time'=>$validatedData['dose_time'],
            'user_id'=>5,
            'status'=>1,
            'quantity'=>$validatedData['quantity']
        ]);
        return response()->json(['succsful'=>'تم ارسال الطلب'], 200);
        
    }
    public function update($id)
    {
       $order= Order::find($id);
       $order->status=3;
       $order->save();
 
      $availableVaccination= AvailableVaccinations::firstOrCreate([
           'user_id'=> $order->user_id,
           'vaccination_id'=> $order->vaccination_id,
          
       ]);
        $availableVaccination->quantity = $availableVaccination->quantity +$order->quantity;
        $availableVaccination->save();
       return redirect()->back()->with('message', 'تم تأكيد ');
    }
}
