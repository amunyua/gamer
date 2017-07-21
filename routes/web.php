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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
//game Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('game','\App\Http\Controllers\GameController');
  Route::post('game/{id}/update','\App\Http\Controllers\GameController@update');
  Route::get('game/{id}/delete','\App\Http\Controllers\GameController@destroy');
  Route::get('game/{id}/deleteMsg','\App\Http\Controllers\GameController@DeleteMsg');
});

//game Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('game','\App\Http\Controllers\GameController');
  Route::post('game/{id}/update','\App\Http\Controllers\GameController@update');
  Route::get('game/{id}/delete','\App\Http\Controllers\GameController@destroy');
  Route::get('game/{id}/deleteMsg','\App\Http\Controllers\GameController@DeleteMsg');
});

//game Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('game','\App\Http\Controllers\GameController');
  Route::post('game/{id}/update','\App\Http\Controllers\GameController@update');
  Route::get('game/{id}/delete','\App\Http\Controllers\GameController@destroy');
  Route::get('game/{id}/deleteMsg','\App\Http\Controllers\GameController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
//availablegame Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('availablegame','\App\Http\Controllers\AvailablegameController');
  Route::post('availablegame/{id}/update','\App\Http\Controllers\AvailablegameController@update');
  Route::get('availablegame/{id}/delete','\App\Http\Controllers\AvailablegameController@destroy');
  Route::get('availablegame/{id}/deleteMsg','\App\Http\Controllers\AvailablegameController@DeleteMsg');
});

//match Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('match','\App\Http\Controllers\MatchController');
  Route::post('match/{id}/update','\App\Http\Controllers\MatchController@update');
  Route::get('match/{id}/delete','\App\Http\Controllers\MatchController@destroy');
  Route::get('match/{id}/deleteMsg','\App\Http\Controllers\MatchController@DeleteMsg');
});
