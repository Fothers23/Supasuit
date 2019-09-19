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

Route::get('/home', 'HomeController@index');

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
Route::post('/cosplay', 'CosplayController@store');

// EDIT
Route::get('/cosplay/{cosplay}/edit', 'CosplayController@edit');

// UPDATE
Route::put('/cosplay/{cosplay}', 'CosplayController@update');

// DESTROY
Route::delete('/cosplay/{cosplay}/edit', 'CosplayController@destroy');

//Route::get('/shop', 'ShopController@buyItem');
