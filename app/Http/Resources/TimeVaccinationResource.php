<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TimeVaccinationUserResource;

class TimeVaccinationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $users=User::all();
        $index[0]="";
        $allUser=  array();
        foreach ($this->resource as $vaccination) {

            array_push($index,$vaccination->id);
        }
        sort($index);

        foreach ($users as $user) {

            if ($user->vaccinations->whereIn('id',$index)->count() > 0)
                 array_push( $allUser,new TimeVaccinationUserResource($user));
        }
        
        return $allUser;
    }
}
