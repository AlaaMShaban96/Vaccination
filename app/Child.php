<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    //"user_id",
    protected $appends = ['age'];
    protected $fillable=[
       "id", "name","date_of_birth","home_adress","telephone_number","user_id"
    ];
    public function childfiles()
    {
        return $this->hasMany(Childfile::class);
    }
   public function user()
   {
       return $this->belongsTo(User::class);
   }

    public function getAgeAttribute()
    {
  
        return Carbon::createFromDate($this->attributes['date_of_birth'])
                ->diff(Carbon::now())
                ->format('%y سنة , %m  شهر , %d يوم');
    }
}
