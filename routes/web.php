<?php

use Mews\Captcha\Facades\Captcha;
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
Route::view('/login', 'login');
Route::view('/rule', 'rule');
Route::view('/sales', 'sales');
Route::view('/video', 'video');
Route::view('/winners', 'winners');

Route::group(['middleware' => 'loginAuth'], function () {
    Route::get('/gift', 'MemberController@gift');
    Route::view('/record', 'record');

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

Route::group(['prefix' => 'api'], function () {
    Route::get('/lottery', 'LotteryController@lottery');
    Route::post('/form', 'FormController@insertForm');
});

Route::get('captcha', function () {
    return Captcha::create('default');
});