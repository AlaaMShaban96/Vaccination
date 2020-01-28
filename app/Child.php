<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    //"user_id",
    protected $fillable=[
       "id", "name","date_of_birth","home_adress","telephone_number","user_id"
    ];
    public function childfiles()
    {
        return $this->hasMany(Childfile::class);
    }
}
