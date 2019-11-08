<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Voiture;
use App\Photo;
use App\Role;
use App\Modele;
use App\Category;
use App\Marque;


class UserController extends Controller
{
    public function adminHome()
    {
    	return view('admin');
    }
    public function addVoiture()
    {

        $modeles=Modele::orderBy('Id','Desc')->get();        
        
        return view('addvoiture', [
                                   'modeles'=>$modeles
                                   ]);
    }
    public function addPostVoiture(Request $request)
    {
    	$voiture=Voiture::create([
    		'puissance'=>$request['puissance'],
    		'couleur'=>$request['couleur'],
            'modele_id'=>$request['modele_id']	
    		]);
    	if ($request->hasFile('image')) 
        {

    		foreach ($request->image as $image) 
            {
    			$imageName=time().'_'.$image->getClientOriginalName();
                $image->move('image',$imageName);

                Photo::create([ 'voiture_id'=>$voiture->id,
                                'photo'=>$imageName ]);
    		}


    	}

         return back()->with('success','Votre voiture a été ajouté');
    }
    // public function userOrAdmin()
    // {
    //     $roles=Role::find()->all();
    //     //dd($roles);
    //     return view('register', ['roles'=> $roles]);
    // }

}
