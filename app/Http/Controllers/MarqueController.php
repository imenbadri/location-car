<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marque;

class MarqueController extends Controller
{
    public function addMarque()
    {
    	return view('add_marque');
    }
    public function addPostMarque(Request $request)
    {
    	$marque=Marque::create([
    			'marque'=>$request['marque']

    		]);
    	return back()->with('success','Votre marque a été ajoutée');
    }
    public function voirMarque()
    {
        $marques=Marque::orderBy('Id','Desc')->get();
        
        return view('voir_marque',['marques'=>$marques]);
    }
}
