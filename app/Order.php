<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'id','name','dose_time','quantity','user_id','vaccination_id','status','response_quantity'
    ];

   public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function vaccination()
    {
        return $this->belongsTo(Vaccination::class);
    }

}
