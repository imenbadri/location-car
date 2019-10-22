<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;


class VoitureController extends Controller
{
    public function voir_voiture()
    {
    	return view('voir_voiture');
    }
    
}

