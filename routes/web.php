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
Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');
Route::get('assets', 'IassetsController@index');
Route::get('assets/create', 'IassetsController@create');
Route::get('assets/{id}', 'IassetsController@show');
Route::post('assets', 'IassetsController@store');
