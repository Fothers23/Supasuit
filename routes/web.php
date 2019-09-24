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


//Home
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/discussion', 'HomeController@discussion')->name('discussion');
Route::get('/upcoming', 'HomeController@upcoming')->name('upcoming');
Route::get('/tips', 'HomeController@tips')->name('tips');



//Cosplays

// index of all cosplays
// INDEX
Route::get('/cosplay', 'CosplayController@index')->name('cosplay.index');

// CREATE
Route::get('/cosplay/create', 'CosplayController@create');

// shows specific cosplay
// {} indicates a route parameter
// SHOW
Route::get('/cosplay/{cosplay}', 'CosplayController@show')->name('cosplay.show'); 

// STORE
Route::post('/cosplay', 'CosplayController@store')->name('cosplay.store');

// EDIT
Route::get('/cosplay/{cosplay}/edit', 'CosplayController@edit')->name('cosplay.edit');

// UPDATE
Route::put('/cosplay/{cosplay}', 'CosplayController@update')->name('cosplay.update');

// DESTROY
Route::delete('/cosplay/{cosplay}', 'CosplayController@destroy')->name('cosplay.destroy');





//Users

Route::get('/logout', 'UserController@logout')->name('logout');

//REGISTER & LOGIN
Auth::routes();

// SHOW
Route::get('/user/{user}', 'UserController@show')->name('profile'); 

// EDIT
Route::get('/user/{user}/edit', 'UserController@edit');

// UPDATE
Route::put('/user/{user}', 'UserController@update');

// DESTROY
Route::delete('/user/{user}', 'UserController@destroy');


