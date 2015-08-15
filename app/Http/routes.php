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

Route::get('/', function () {
    return view('home');
});


Route::get('/register',  ['uses'=>'Auth\AuthController@getRegister'] );


Route::post('/register', ['uses'=>'Auth\AuthController@postRegister']);


Route::get('/subscribe', ['uses'=>'SubscriptionController@index']);

Route::get('/payment/{id}', ['uses'=>'SubscriptionController@payment']);

Route::get('/receipt/{hash}', ['uses'=>'SubscriptionController@receipt']);

Route::get('/payment_execute', ['uses'=>'SubscriptionController@execute']);



Route::post('/subscribe/{id}', ['uses'=>'SubscriptionController@subscribe']);




