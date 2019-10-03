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
Route::get('/home/main', 'HomeController@home')->name('home');
Route::get('/home/discussion', 'HomeController@discussion')->name('discussion');
Route::get('/home/upcoming', 'HomeController@upcoming')->name('upcoming');
Route::get('/home/tips', 'HomeController@tips')->name('tips');





//Cosplays

// CREATE
Route::get('/cosplay/create', 'CosplayController@create')->name('cosplay.create');

// index of all cosplays
// INDEX
Route::get('/cosplay/{category}', 'CosplayController@index')->name('cosplay.index');

// shows specific cosplay
// {} indicates a route parameter
// SHOW
Route::get('/cosplay/show/{cosplay}', 'CosplayController@show')->name('cosplay.show'); 

// STORE
Route::post('/cosplay', 'CosplayController@store')->name('cosplay.store');

// EDIT
Route::get('/cosplay/{cosplay}/edit', 'CosplayController@edit')->name('cosplay.edit');

// UPDATE
Route::put('/cosplay/{cosplay}', 'CosplayController@update')->name('cosplay.update');

// DESTROY
Route::delete('/cosplay/{cosplay}', 'CosplayController@destroy')->name('cosplay.destroy');





//Components
Route::get('/cosplay/{cosplay}/add-component', 'ComponentController@create')->name('component.create');

Route::post('/cosplay/{cosplay}', 'ComponentController@store')->name('component.store');




//Users

Route::get('/logout', 'UserController@logout')->name('logout');

//REGISTER & LOGIN
Auth::routes();

// SHOW
Route::get('/user/{user}', 'UserController@show')->name('profile'); 

// UPDATE
Route::put('/user/{user}', 'UserController@update')->name('user.update');

// DESTROY
Route::delete('/user/{user}', 'UserController@destroy')->name('user.destroy');


