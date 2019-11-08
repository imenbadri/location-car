<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

// Route::middleware(['auth'])->group(function () 
// {

// }



Route::get('/voir_voiture','VoitureController@voir_voiture')->name('voir_voiture');

Route::get('/admin','UserController@adminHome')->name('admin');




route::get('/add_voiture','UserController@addVoiture')->name('addvoiture');
route::post('/ajout_voiture','UserController@addPostVoiture')->name('addpostvoiture');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/add_category', 'CategoryController@addCategory')->name('add_category');

Route::post('/ajout_category', 'CategoryController@addPostCategory')->name('add_category');


Route::get('/add_model', 'ModeleController@addModel')->name('add_model');

Route::post('/ajout_model', 'ModeleController@addPostModel')->name('add_model');


Route::get('/add_marque', 'MarqueController@addMarque')->name('add_marque');

Route::post('/ajout_marque', 'MarqueController@addPostMarque')->name('add_marque');

Route::get('/voir_category', 'CategoryController@voirCategory')->name('voir_category');

Route::get('/voir_marque', 'MarqueController@voirMarque')->name('voir_marque');
//Route::get('/add_voiture', 'ModeleController@voirModel')->name('addvoiture');

//Route::get('/add_voiture', 'CategoryController@voirCategory')->name('addvoiture');
