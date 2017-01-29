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


Route::get('/', function(){
    return view('root');
});

Route::resource('iassets','IassetsController');
Route::resource('users','UsersController');
Route::resource('ivendors','IvendorsController');
Route::resource('iworkstations','IworkstationsController');

Auth::routes();

Route::get('/home', 'HomeController@index');
