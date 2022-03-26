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
        $query=User::where('account_type','=',2);
        $ordersStatus = Order::
            whereYear('created_at', date('Y'))
            ->orderBy('created_at')
            ->get()
            ->groupBy(function (Order $item) {
                return $item->created_at->format('Y-m');
            })->map->count()->toArray();
            User::where('account_type','=',2)->with('orders')->withCount('orders')
            ->get();

        $orders = Order::where('status','=',1)->get();
        $users = $query->get();
        $top5User=$query->with('orders')->withCount('orders')->orderByDesc('orders_count')->take(5)->get();
        $vaccinations = Vaccination::all();
        return view('admin.index',compact('users','vaccinations','orders','ordersStatus','top5User'));
    }
}
