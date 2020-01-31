<?php

namespace App\Http\Controllers\Api;

use App\Child;
use App\Childfile;
use App\Vaccination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class XController extends Controller
{
     
    public function showChild($id)
    {
     
       $child= Child::findOrFail($id);
        $childfiles=Childfile::where('child_id','=',$id)->get();
         $index[0]="";
         

        foreach ($childfiles as $childfile) {

            array_push($index,$childfile->vaccination_id);
           

        }
        sort($index);
        $exceptVaccinations=Vaccination::whereIn('id',$index)->get();
      
        $onlyVaccinations = Vaccination::whereNotIn('id',$index)->get();

        $data=[

            'child'=>$child,
            'exceptVaccinations'=>$exceptVaccinations,
            'onlyVaccinations'=>$onlyVaccinations

        ];

   return response()->json($data, 200);

        // return view('VaccinationCenters.infochild' ,compact('exceptVaccinations','onlyVaccinations','child'));
    }
}
