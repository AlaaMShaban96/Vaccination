<?php

namespace App\Http\Controllers;

use App\City;
use App\Child;
use App\Childfile;
use App\Vaccination;
use Illuminate\Http\Request;

class ChildController extends Controller
{


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required',
            'home_adress' => 'required',
            'telephone_number' => 'required|integer|not_in:0|numeric|digits:9'

        ]);
        $validatedData['user_id']=auth()->user()->id;
        $child = Child::firstOrCreate($validatedData);
        return response()->json($child, 200);

    }


    public function show(Request $request)
    {


        $validatedData = $request->validate([
            'id' => 'required',

        ]);

        $child = Child::findOrFail($validatedData['id']);



        return response()->json([
            'child'=>$child,

        ], 200);

    }




    public function showChild(Request $request)
    {

        $validatedData = $request->validate([
            'id' => 'required',

        ]);

        $child = Child::find($validatedData['id']);

        $childfiles=Childfile::where('child_id','=',$validatedData['id'])->get();
         $index[0]="";


        foreach ($childfiles as $childfile) {

            array_push($index,$childfile->vaccination_id);


        }
        sort($index);
        $exceptVaccinations=Vaccination::whereIn('id',$index)->orderBy('id', 'asc')->get();

        $onlyVaccinations = Vaccination::whereNotIn('id',$index)->orderBy('id', 'asc')->get();

        return view('VaccinationCenters.infochild' ,compact('exceptVaccinations','onlyVaccinations','child'));
    }

    public function showChildren()
    {
       $cities= City::all();
        $children=Child::where('user_id','=',auth()->user()->id)->paginate(10);
        return view('VaccinationCenters.children' ,compact('children','cities'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required',
            'home_adress' => 'required',
            'telephone_number' => 'required|not_in:0|numeric|digits:10',

        ]);
        $validatedData['user_id']=auth()->user()->id;
        $child = Child::find($request->id)->update($validatedData);

        return response()->json(['success'=>'تم عملية التعديل'], 200);

    }
    public function destroy(Child $child)
    {
        $child->delete();
        return response()->json(['success'=>'تم عملية التعديل'], 200);
    }




    public function showChildToPublic(Request $request)
    {

        $validatedData = $request->validate([
            'id' => 'required',

        ]);
        try {
            $child = Child::find($validatedData['id']);

        } catch (\Throwable $th) {

            return redirect()->back()->withErrors(['errors'=>'الطفل غير موجود'])->withInput();
        }


        $childfiles=Childfile::where('child_id','=',$validatedData['id'])->get();
         $index[0]="";


        foreach ($childfiles as $childfile) {

            array_push($index,$childfile->vaccination_id);


        }
        sort($index);
        $exceptVaccinations=Vaccination::whereIn('id',$index)->get();

        $onlyVaccinations = Vaccination::whereNotIn('id',$index)->get();

        return view('index.Pricing' ,compact('exceptVaccinations','onlyVaccinations','child'));
    }

}
