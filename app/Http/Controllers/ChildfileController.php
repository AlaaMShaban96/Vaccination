<?php

namespace App\Http\Controllers;

use App\User;
use App\Childfile;
use App\Vaccination;
use Illuminate\Http\Request;


class ChildfileController extends Controller
{
    
    public function store(Request $request)
    {
      $childfile=$request->validate([
        'vaccination_id' => 'required',
        'child_id' => 'required',
        ]);

        $childfile['user_id']=auth()->user()->id;
        
        $vaccination= auth()->user()->vaccinations()->where('vaccination_id',$childfile['vaccination_id'])->count();

        if ($vaccination==0) {
          
          $childfile=   Childfile::Create($childfile);

          $vaccination = Vaccination::find($childfile->vaccination_id);
  
          $childfile->vaccinations()->attach($vaccination);
  
          return response()->json(['message'=>'success'], 200);
         
          
        }else {
          
          $quantity= auth()->user()->vaccinations()->where('vaccination_id',$childfile['vaccination_id'])->first()->pivot->quantity;

            $quantity=$quantity-1;
            auth()->user()->vaccinations()->updateExistingPivot($childfile['vaccination_id'],['quantity'=>$quantity]);
          

            if ($quantity==0) {
              auth()->user()->vaccinations()->detach($childfile['vaccination_id']);
            }
          
            $childfile=   Childfile::Create($childfile);

            $vaccination = Vaccination::find($childfile->vaccination_id);

            $childfile->vaccinations()->attach($vaccination);

            return response()->json(['message'=>'success'], 200);

          }





      
       

    }
}
