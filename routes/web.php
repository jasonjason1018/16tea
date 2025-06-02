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
    Route::get('/record', 'MemberController@record');

    Route::group(['prefix' => 'morning'], function () {
        Route::get('/game', 'GameController@morningGame');
        Route::view('/complete', 'morning.complete');
    });

    Route::group(['prefix' => 'mist'], function () {
        Route::get('/game', 'GameController@mistGame');
        Route::view('/complete', 'mist.complete');
    });

    Route::group(['prefix' => 'star'], function () {
        Route::get('/game', 'GameController@starGame');
        Route::view('/complete', 'star.complete');
    });
});

Route::get('/morning/form', 'FormController@morningForm')->middleware('loginAuth:true');
Route::get('/mist/form', 'FormController@mistForm')->middleware('loginAuth:true');
Route::get('/star/form', 'FormController@starForm')->middleware('loginAuth:true');

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
    Route::post('/score', 'MemberController@score');
    Route::post('/16chaAdmin/login', 'LoginController@adminLogin');
    Route::post('/audio_log', 'GameController@audioLog');
    Route::post('/tag', 'MemberController@tag');
    Route::get('/analysis', 'AdminController@getAnalysis');
});

Route::get('captcha', function () {
    return Captcha::create('default');
});

Route::group(['prefix' => '16chaAdmin'], function () {
    Route::view('/', '16chaAdmin.login');
    Route::group(['middleware' => 'adminAuth'], function() {
        Route::get('/member', 'AdminController@member');
        Route::get('/form/{topic}', 'AdminController@form');
        Route::get('/winner', 'AdminController@winner');
        Route::get('/analysis', 'AdminController@analysis');
    });
    Route::get('/logout', 'AdminController@logout');
});

Route::get('/share/{topic}/{scoreLevel}', 'ShareController@share');