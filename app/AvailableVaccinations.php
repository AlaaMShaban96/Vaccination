<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class AvailableVaccinations extends Model
{
    protected $fillable=[
        'id','vaccination_id','quantity','user_id'
    ];

    

    public function vaccination()
    {
        return $this->belongsTo(Vaccination::class);
    }
    // public function users()
    // {
       
    //         return $this->hasMany(User::class);
        
    // }
   
}