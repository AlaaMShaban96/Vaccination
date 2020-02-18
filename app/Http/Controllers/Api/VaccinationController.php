<?php

namespace App\Http\Controllers\Api;

use App\Vaccination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Resources\VaccinationResource;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $vaccinations= Vaccination::all();

        return (new VaccinationResource($vaccinations))->response()->setStatusCode(200);
    }
    public function showUser(Vaccination $vaccination)
    {
        // $vaccination = Vaccination::find($id);

        return (new UserResource($vaccination->users))->response()->setStatusCode(200);
    }



    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
 
  

  

}
