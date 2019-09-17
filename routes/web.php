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

// index of all cosplays
// INDEX
Route::get('/gallery', 'GalleryController@index');

// shows specific cosplay
// {} indicates a route parameter
// SHOW
Route::get('/gallery/{cosplay}', 'GalleryController@show');

// CREATE
Route::get('/gallery/create', 'GalleryController@create');

// STORE
Route::post('/gallery', 'GalleryController@store');

// EDIT
Route::get('/gallery/{cosplay}/edit', 'GalleryController@edit');

// UPDATE
Route::put('/gallery/{cosplay}', 'GalleryController@update');

// DESTROY
Route::delete('/gallery/{cosplay}/edit', 'GalleryController@destroy');

//Route::get('/shop', 'ShopController@buyItem');
