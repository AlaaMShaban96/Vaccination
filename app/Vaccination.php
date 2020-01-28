<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    protected $fillable=[
        'id','name','dose_time'
    ];

    public function childfiles()
    {

        return $this->belongsToMany(Childfile::class, 'childfile_vaccination');

    }
    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'user_vaccination')->withPivot(['quantity']);
    // }
}
