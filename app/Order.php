<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'id','name','dose_time','quantity','user_id,'
    ];

   public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}
