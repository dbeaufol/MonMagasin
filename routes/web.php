<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/','AccueilController@index');
Route::get('contact','ContactController@index');
Route::get('magasin','MagasinController@index');
Route::get('panier','PanierController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
