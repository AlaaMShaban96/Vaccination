<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VaccinationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return $this->resource->map(function ($vaccination) {

        return [
            "id"=> $vaccination->id,
            "name"=> $vaccination->name,
            "dose_time"=> $vaccination->time->dose_time,
        ];
    });
    }
}
