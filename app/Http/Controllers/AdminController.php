<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Vaccination;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index() 
    {
        
        $orders = Order::where('status','=',1)->get();
        $users = User::where('account_type','=',2)->get();
        $vaccinations = Vaccination::all();
        return view('admin/index',compact('users','vaccinations','orders'));
    }
}
