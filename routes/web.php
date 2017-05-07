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

// Search
Route::get('search/{keyword}', 'ContentController@results');
Route::post('search', 'ContentController@search');

// Login
Route::get('/login', 'Auth\LoginController@index');
Route::get('/logout', function() { Auth::logout(); return Redirect::to('/'); });
Route::get('auth/{provider}', 'Auth\LoginController@redirect');
Route::get('auth/{provider}/callback', 'Auth\LoginController@callback');

// User item resource
Route::resource('user-item', 'UserItemController', ['except' => [
    'index',
]]);

// User resource
Route::resource('user', 'UserController', ['except' => [
	'index'
	]]);

// TODO PUT AUTH ROUTES INTO ONLY AUTHORIZED ROUTES GROUP
Route::group(['prefix' => 'me'], function() {
	Route::get('profile', 'UserItemController@index');

	Route::get('requests', function(){
		// We returnen voorlopig nog geen view via controller, pas wanneer we data passen later veranderen we dit natuurlijk wel
		return view('me.requests');
	});

	Route::get('transactions', function(){
		return view('me.transactions');
	});
});

// Categories, Category
Route::get('categories', 'CategoryController@index');
Route::get('category/{category_name}', 'CategoryController@showItemsByCategoryId');

// Show item
Route::get('item/{item_name}', 'ItemController@index');
