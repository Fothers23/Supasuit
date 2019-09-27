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

// index of all cosplays
// INDEX
Route::get('/cosplay/all', 'CosplayController@index')->name('cosplay.index');
Route::get('/cosplay/anime', 'CosplayController@index')->name('cosplay.anime');
Route::get('/cosplay/cartoons', 'CosplayController@index')->name('cosplay.cartoons');
Route::get('/cosplay/dc', 'CosplayController@index')->name('cosplay.dc');
Route::get('/cosplay/disney', 'CosplayController@index')->name('cosplay.disney');
Route::get('/cosplay/dr_who', 'CosplayController@index')->name('cosplay.dr_who');
Route::get('/cosplay/games', 'CosplayController@index')->name('cosplay.games');
Route::get('/cosplay/game_of_thrones', 'CosplayController@index')->name('cosplay.game_of_thrones');
Route::get('/cosplay/harry_potter', 'CosplayController@index')->name('cosplay.harry_potter');
Route::get('/cosplay/horror', 'CosplayController@index')->name('cosplay.horror');
Route::get('/cosplay/hunger_games', 'CosplayController@index')->name('cosplay.hunger_games');
Route::get('/cosplay/lotr', 'CosplayController@index')->name('cosplay.lotr');
Route::get('/cosplay/marvel', 'CosplayController@index')->name('cosplay.marvel');
Route::get('/cosplay/other', 'CosplayController@index')->name('cosplay.other');
Route::get('/cosplay/sherlock', 'CosplayController@index')->name('cosplay.sherlock');
Route::get('/cosplay/star_trek', 'CosplayController@index')->name('cosplay.star_trek');
Route::get('/cosplay/star_wars', 'CosplayController@index')->name('cosplay.star_wars');
Route::get('/cosplay/supernatural', 'CosplayController@index')->name('cosplay.supernatural');

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


