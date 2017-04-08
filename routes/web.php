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

// Login
Route::get('/login', 'Auth\LoginController@index');
Route::get('/logout', function() { Auth::logout(); return Redirect::to('/'); });
Route::get('auth/{provider}', 'Auth\LoginController@redirect');
Route::get('auth/{provider}/callback', 'Auth\LoginController@callback');

// Resource controllers
// Note we setup a nest controller so that we can easily show items per user
// You can also do it without nesting but this makes way more sense if you want to show items per user
Route::resource('user', 'UserController');
Route::resource('user.items', 'ItemController');
