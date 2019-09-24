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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

//Cosplay/Gallery
// index of all cosplays
// INDEX
Route::get('/cosplay', 'CosplayController@index');

// CREATE
Route::get('/cosplay/create', 'CosplayController@create');

// shows specific cosplay
// {} indicates a route parameter
// SHOW
Route::get('/cosplay/{cosplay}', 'CosplayController@show'); 

// STORE
Route::post('/cosplay', 'CosplayController@store')->name('cosplay.store');

// EDIT
Route::get('/cosplay/{cosplay}/edit', 'CosplayController@edit');

// UPDATE
Route::put('/cosplay/{cosplay}', 'CosplayController@update');

// DESTROY
Route::delete('/cosplay/{cosplay}', 'CosplayController@destroy');





//Users
//Route::get('/profile', 'UserController@showProfile')->name('Profile');
Route::get('/logout', 'UserController@logout')->name('logout');

//REGISTER & LOGIN
Auth::routes();

// SHOW
Route::get('/user/{user}', 'UserController@show'); 

// EDIT
Route::get('/user/{user}/edit', 'UserController@edit');

// UPDATE
Route::put('/user/{user}', 'UserController@update');

// DESTROY
Route::delete('/user/{user}', 'UserController@destroy');


