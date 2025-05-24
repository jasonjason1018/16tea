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

Route::view('/', 'index');
Route::get('/list', 'GameController@list');
Route::view('/gift', 'gift');
Route::view('/login', 'login');
Route::view('/record', 'record');
Route::view('/rule', 'rule');
Route::view('/sales', 'sales');
Route::view('/video', 'video');
Route::view('/winners', 'winners');

Route::group(['middleware' => 'loginAuth'], function () {
    Route::group(['prefix' => 'morning'], function () {
        Route::view('/game', 'morning.game');
        Route::view('/form', 'morning.form');
        Route::view('/complete', 'morning.complete');
    });

    Route::group(['prefix' => 'mist'], function () {
        Route::view('/game', 'mist.game');
        Route::view('/form', 'mist.form');
        Route::view('/complete', 'mist.complete');
    });

    Route::group(['prefix' => 'star'], function () {
        Route::view('/game', 'star.game');
        Route::view('/form', 'star.form');
        Route::view('/complete', 'star.complete');
    });
});

Route::group(['prefix' => 'login'], function () {
    Route::get('/line', 'LoginController@lineLogin');
    Route::get('/line/callBack', 'LoginController@lineLoginCallback');
    Route::get('/fb', 'LoginController@fbLogin');
    Route::get('/fb/callBack', 'LoginController@fbLoginCallback');
});

Route::get('/logout', 'LoginController@logout');

Route::get('/api/lottery', 'LotteryController@lottery');