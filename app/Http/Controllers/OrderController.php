<?php

namespace App\Http\Controllers;

use App\User;
use App\Child;
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
        $vaccinations =Vaccination::OrderBy('id', 'asc')->paginate(8);
        $chilren = Child::where('user_id',auth()->user()->id)->get();
        return view('VaccinationCenters.send_an_order', compact('vaccinations','chilren'));
    }
    public function receiveOrder()
    {

        $orders= Order::where('user_id', '=', auth()->user()->id)->where('status','=',2)->orderBy('id', 'asc')->paginate(10);
        return view('VaccinationCenters.receive_an_order', compact('orders'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'vaccination_id' => 'required',
            'quantity' => 'required |numeric|min:1|not_in:0 ',

        ]);


        Order::Create([
            'vaccination_id'=>$validatedData['vaccination_id'],
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
 $orders = Order::where('status','=',1)->paginate(7);
 $users = User::where('account_type','=',2)->get();
 $vaccinations = Vaccination::all();
    return view('admin/requests',compact('orders','users','vaccinations'));

}

public function accept(Request $request ,$id)
{
    $this->validate($request, [
        'response_quantity' => 'required',
    ]);

    $order= Order::find($id);
if ($request->response_quantity < $order->vaccination->quantity)
 {
    $order->vaccination->quantity = $order->vaccination->quantity - $request->response_quantity;
    $order->status = 2;
    $order->response_quantity = $request->response_quantity;
    $order->save();
    $order->vaccination->save();
    return response(['success'=>''],200);
} else {
    return response(['error'=>''],500);
}

}



public function send(Request $request)
{
    $this->validate($request, [
        'user_id' => 'required',
        'status' => 'required',
        'vaccination_id' => 'required',
        'response_quantity' => 'required',
        'quantity' => 'required |numeric|min:1|not_in:0',

    ]);
    $vaccination= Vaccination::find($request->vaccination_id);

    if ($request->response_quantity < $vaccination->quantity)
    {

       $vaccination->quantity = $vaccination->quantity - $request->response_quantity;
       Order::Create($request->all());
       $vaccination->save();
       return response(['success'=>''],200);
   } else {
       return response(['error'=>''],500);
   }


}

}

