<?php

namespace App\Http\Controllers;

use App\City;
use App\Time;
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
        $orders= Order::where('user_id', '=', auth()->user()->id)->where('status','=',1);
        $cities = City::all();

        return view('VaccinationCenters.index', compact('children','orders','cities'));
    }
    public function showVaccinationAvailable()
    {
        $user= auth()->user();
        return view('VaccinationCenters.vaccinationAvailable' ,compact('user'));

    }
    public function showVaccination(Request $request)
    {
            $users  = User::where('account_type',2)->get()->toArray();
            return view('index.vaccinationCenters' ,compact('users'));

    }
    public function showVaccinationSearch(Request $request)
    {
        $users  = User::where('account_type',2)->get()->toArray();
        $user  = User::find($request->user_id);
        return view('index.vaccinationCenters' ,compact('user','users'));

    }
    public function show_reports()
    {
       $status= Order::where('user_id',auth()->user()->id)->groupBy('status')
                ->selectRaw('count(*) as total, status')
                ->pluck('total','status');
        return view('VaccinationCenters.reports',compact('status'));

    }













    // admin

    public function index()
    {
        $vaccinations = Vaccination::orderBy('id')->paginate(7);
       $times= Time::all();
        return view('admin/Vaccinations',compact('vaccinations','times'));


    }




    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'time_id' => 'required',
            'quantity' => 'required|not_in:0',
            ]);
    // dd($request->dose_time);
            Vaccination::Create($request->all());


    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'time_id' => 'required',
            'quantity' => 'required',
        ]);

        $Vaccination= Vaccination::find($id);
        $Vaccination->name = $request->name;
        $Vaccination->time_id = $request->time_id;
        $Vaccination->quantity = $request->quantity;

        $Vaccination->save();
        return response()->json([ 'succeful'=>'تمت تعديل التطعيمة بنجاح'], 200);
    }













}
