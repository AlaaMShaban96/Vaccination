<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = [
        'id','name', 
    ]; 
    
    public function vaccinations()
    {
        return $this->hasMany(Vaccination::class);
    }
}
