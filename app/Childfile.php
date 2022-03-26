<?php

namespace App;

use App\Child;
use Illuminate\Database\Eloquent\Model;

class Childfile extends Model
{
    protected $fillable=[
        'id','vaccination_id','child_id','user_id'
    ];

    public function Child()
    {
        return $this->belongsTo(Child::class);
    }

    public function vaccinations()
    {

        return $this->belongsToMany(Vaccination::class, 'childfile_vaccination');

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
