<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    protected $guarded= [];

    public function voiture()
    {
        return $this->belongsTo('App\Voiture');
    }

    public function marque()
    {
        return $this->belongsTo('App\Marque');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
