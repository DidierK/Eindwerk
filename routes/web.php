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
    return view('home');
});

Auth::routes();
Route::get('/home', 'HomeController@index');

//materiaal
Route::get('add', 'ContentController@index');
Route::post('add','ContentController@store');
Route::get('/', 'ContentController@show');

//search
Route::get('search/{keyword}', 'ContentController@results');
Route::post('search', 'ContentController@search');
