<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    //"vaccination_center_id",
    protected $fillable=[
        "name","date_of_birth","home_adress","telephone_number","vaccination_center_id"
    ];
}
