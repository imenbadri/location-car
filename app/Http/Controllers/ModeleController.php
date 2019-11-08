<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modele;

class ModeleController extends Controller
{
    public function addModel()
    {
    	return view('add_model');
    }
    public function addPostModel(Request $request)
    {
    	$model=Modele::create([
    			'model'=>$request['model']

    		]);
    	return back()->with('success','Votre catégorie a été ajouté');
    }
    
    
}
