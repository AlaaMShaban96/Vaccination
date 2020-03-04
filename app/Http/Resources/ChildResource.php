<?php

namespace App\Http\Resources;

use App\Vaccination;
use App\Http\Resources\ChildfilesResource;
use App\Http\Resources\VaccinationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
 
    
         $index[0]="";
         

        foreach ($this->childfiles as $childfile) {

            array_push($index,$childfile->vaccination_id);
           

        }
        sort($index);
        $exceptVaccinations=Vaccination::whereIn('id',$index)->get();
      
        $onlyVaccinations = Vaccination::whereNotIn('id',$index)->get();



        return [
            'name'=>$this->name,
            "age"=> $this->age,
            "vaccinationTaken"=>  new VaccinationResource($exceptVaccinations),
            "unvaccinatedVaccination"=>  new VaccinationResource($onlyVaccinations),
        ];
    }
}
