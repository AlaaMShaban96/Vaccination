<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableVaccinations extends Model
{
    protected $fillable=[
        'id','vaccination_id','quantity'
    ];
}
