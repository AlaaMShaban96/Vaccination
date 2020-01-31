<?php

namespace App\Http\Controllers;

use App\Child;
use App\Childfile;
use App\Vaccination;
use Illuminate\Http\Request;
use App\AvailableVaccinations;

class ChildController extends Controller
{ 
   
   
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required',
            'home_adress' => 'required',
            'telephone_number' => 'required',
         
        ]);
        $validatedData['user_id']=5;
        $child = Child::firstOrCreate($validatedData);
        return response()->json($child, 200);
     
    }

    
    public function show(Request $request)
    { 
      
      
        $validatedData = $request->validate([
            'id' => 'required',
         
        ]);
        
        $child = Child::findOrFail($validatedData['id']);
        
        
        $collection =AvailableVaccinations::where('user_id','=',5)->get();

        $vaccinations = $collection
        ->map(function ($vaccination) {
            return Vaccination::find($vaccination->vaccination_id) ;
        });

       $childfiles=$child->childfiles;
      
       $except=[];
        foreach ($vaccinations as $vaccination) {
            
            
            
            foreach ($childfiles as $childfile) {
              
                if ($childfile->vaccination_id == $vaccination->id) {
                   
                    array_push($except,$vaccination->id);
                }
                
            }
        }
        
      

    
            $data['vaccination']=$vaccinations->except($except);
          
      
        return response()->json([
            'child'=>$child,
            'vaccinations'=>$data,
        ], 200); 
        
    }



   
    public function showChild($id)
    {
       $child= Child::find($id);
        $childfiles=Childfile::where('child_id','=',$id)->get();
         $index[0]="";
         

        foreach ($childfiles as $childfile) {

            array_push($index,$childfile->vaccination_id);
           

        }
        sort($index);
        $exceptVaccinations=Vaccination::whereIn('id',$index)->paginate(2);
      
        $onlyVaccinations = Vaccination::whereNotIn('id',$index)->paginate(2);

        // $data=[

        //     'child'=>$child,
        //     'exceptVaccinations'=>$exceptVaccinations,
        //     'onlyVaccinations'=>$onlyVaccinations

        // ];



        return view('VaccinationCenters.infochild' ,compact('exceptVaccinations','onlyVaccinations','child'));
    }

    public function showChildren()
    {
        $children=Child::where('user_id','=',5)->paginate(8);
        return view('VaccinationCenters.children' ,compact('children'));
    }

    public function update(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required',
            'home_adress' => 'required',
            'telephone_number' => 'required',
         
        ]);
        $validatedData['vaccination_center_id']=5;
        $child = Child::find($request->id)->update($validatedData);

        return response()->json(['success'=>'تم عملية التعديل'], 200);
     
    }public function destroy(Child $child)
    {
        $child->delete();
        return response()->json(['success'=>'تم عملية التعديل'], 200);
    }


    
}
