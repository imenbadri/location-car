<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
     protected $guarded= [];

     public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
    public function modele()
    {
        return $this->hasMany('App\Modele');
    }
    
}
