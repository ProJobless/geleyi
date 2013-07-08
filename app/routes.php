<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::post('subscribe', ['as' => 'subscribe.user', 'uses'=>'ListController@subscribeUser'] );
Route::post('feedback', ['as' => 'user.feedback', 'uses'=>'ListController@subscribeFeedback'] );

Route::get('debug', function(){

    Kint::dump( asset('javascripts/sys/plugins.js') );
});