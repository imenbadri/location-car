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

//Route::get('/admin','AdminController@adminHome')->name('admin');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
