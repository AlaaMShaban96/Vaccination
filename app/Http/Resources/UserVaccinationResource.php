<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserVaccinationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [ 
            'data'=>[
                "id"=> $this->id,
                "name"=> $this->name,
                "email"=> $this->email,
                "status"=> $this->status,
                "city"=>$this->city->name,
                "phone_number"=> $this->phone_number,
                'vaccinations'=>new VaccinationResource($this->vaccinations),
            
            ]
          ];
      
    }
}
