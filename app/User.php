<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // public $table = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = [
        'id','name', 'email', 'password','status','city_id','phone_number','account_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function vaccinations()
    {
        return $this->belongsToMany(Vaccination::class, 'user_vaccination')->withPivot('quantity');
    
    }
    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }
   
}

