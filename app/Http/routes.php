<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',  [
    'as' =>'home',
    'uses' => 'PagesController@home'
]);


Route::group(['prefix' => 'auth'],function(){

    Route::get('register', [
        'as' => 'get_register',
         'uses' => 'Auth\AuthController@getRegister'
    ]);

    Route::post('register', [
        'as' => 'post_register',
        'uses' => 'Auth\AuthController@postRegister'
    ]);

    Route::get('login', [
        'as' => 'get_login',
        'uses' => 'Auth\AuthController@getLogin'
    ]);

    Route::post('login', [
        'as' => 'post_login',
        'uses' => 'Auth\AuthController@postLogin'
    ]);

    Route::get('logout', [
        'as' => 'get_logout',
        'uses' => 'Auth\AuthController@getLogout'
    ]);

});
