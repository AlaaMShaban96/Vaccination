<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Vaccination;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function show()
    {
       $orders = Order::where('user_id',auth()->user()->id)->paginate(10);
        return view('VaccinationCenters.orders', compact('orders'));

    }
    
    public function sendOrder()
    {
        $vaccinations =Vaccination::paginate(5);
        
        return view('VaccinationCenters.send_an_order', compact('vaccinations'));
    }
    public function receiveOrder()
    {
        
        $orders= Order::where('user_id', '=', auth()->user()->id)->where('status','=',2)->paginate(10);
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
            'user_id'=>auth()->user()->id,
            'status'=>1,
            'quantity'=>$validatedData['quantity'],
            'response_quantity'=>$validatedData['quantity']
        ]);
        return response()->json(['succsful'=>'تم ارسال الطلب'], 200);
        
    }
    public function update($id)
    {
       $order= Order::find($id);

       $order->status=3;
       
       $order->save();

       if(auth()->user()->vaccinations()->where('vaccination_id', $order->vaccination_id)->count()==0) {

        auth()->user()->vaccinations()->attach($order->vaccination->id,['quantity'=>$order->response_quantity]);

        }else {

          $quantity =  auth()->user()->vaccinations()->where('vaccination_id',$order->vaccination_id)->first()->pivot->quantity;
          $quantity = $quantity + $order->quantity;

          auth()->user()->vaccinations()->updateExistingPivot($order->vaccination_id,['quantity'=>$quantity]);


        }
 
       return redirect()->back()->with('message', 'تم تأكيد ');
    }






    
// admin 


public function index()
{
 $orders = Order::where('status','=',1)->get();
    return view('admin/requests',compact('orders'));

}

public function accept($id)
{
    $order= Order::find($id);
if ($order->quantity < $order->vaccination->quantity)
 {
    $order->vaccination->quantity = $order->vaccination->quantity - $order->quantity; 
    $order->status = 2;
    $order->save();
    $order->vaccination->save();
    return response(['success'=>''],200);
} else {
    return response(['error'=>''],500);

}

}

}
