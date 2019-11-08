<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded= [];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function voiture()
    {
        return $this->hasMany('App\Voiture');
    }
}
