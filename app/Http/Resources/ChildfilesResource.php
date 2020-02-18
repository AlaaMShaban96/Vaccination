<?php

namespace App\Http\Resources;

use App\Http\Resources\VaccinationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildfilesResource extends JsonResource
{
    /** 
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->map(function ($childfile) {
            return [

                  "vaccination"=> new VaccinationResource($childfile->vaccinations) ,
                  
            ];
          });
    }
}
