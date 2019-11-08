<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;


class VoitureController extends Controller
{
    public function voir_voiture()
    {
    	$voitures=Voiture::orderBy('Id','Desc')->get();
        //dd($voitures);
        
        return view('voir_voiture', ['voitures'=>$voitures]);
    	
    }
    
}

