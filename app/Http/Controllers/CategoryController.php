<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory()
    {
    	return view('add_category');
    }
    public function addPostCategory(Request $request)
    {
    	$categories=Category::create([
    			'category'=>$request['category'],
    			'prix'=>$request['prix']

    		]);
    	return back()->with('success','Votre catégorie a été ajouté');
    }
    
    public function voirCategory()
    {
        $categories=Category::orderBy('Id','Desc')->get();
        
        return view('voir_category',['categories'=>$categories]);
    }
}
