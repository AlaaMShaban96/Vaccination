<?php

namespace App\Http\Controllers;

use App\Childfile;
use App\Vaccination;
use Illuminate\Http\Request;
use App\AvailableVaccinations;

class ChildfileController extends Controller
{
    
    public function take_a_dose(Request $request)
    {
      $childfile=$request->validate([
        'vaccination_id' => 'required',
        'child_id' => 'required',
        ]);

        $available=AvailableVaccinations::where('user_id','=',5)
        ->where('vaccination_id','=', $childfile['vaccination_id'])->first();
       
        $available->quantity=$available->quantity-1;
        $available->save();

        if ($available->quantity==0) {
          $available->delete();
        }
       
        $childfile=   Childfile::Create($childfile);

        $vaccination = Vaccination::find($childfile->vaccination_id);

        $childfile->vaccinations()->attach($vaccination);

        return response()->json(['message'=>'success'], 200);

    }
    public function take_a_dose_to_childfile(Request $request)
    {
      $childfile=$request->validate([
        'vaccination_id' => 'required',
        'child_id' => 'required',
        ]);

        AvailableVaccinations::where('user_id','=',5)
        ->where('vaccination_id','=', $childfile['vaccination_id'])->first();
       
      
        $childfile=   Childfile::Create($childfile);

        $vaccination = Vaccination::find($childfile->vaccination_id);

        $childfile->vaccinations()->attach($vaccination);

        return response()->json(['message'=>'success'], 200);

    }
}
