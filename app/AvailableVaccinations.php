<?php

namespace App;

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
}