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
                "id"=> 5,
                "name"=> $this->name,
                "email"=> $this->email,
                "status"=> 1,
                "city"=>$this->city->name,
                "phone_number"=> 1927780208,
                'vaccinations'=>new VaccinationResource($this->vaccinations),
            
            ]
          ];
      
    }
}
