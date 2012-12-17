<?php

Route::get('/', function () {
  return Redirect::to('welcome');
});

Route::get('login', function () {
  return View::make('user.login');
});

Route::controller('auth');
Route::controller('user');
Route::controller('welcome');


/*-*-*-*-*-------------------------------
 *  Listeners
 *----------------------------------------*/
Event::listen('404', function () {
  return Response::error('404');
});

Event::listen('500', function () {
  return Response::error('500');
});
/*-----------------------------*-*-*-*-*/


/*-*-*-*-*-------------------------------
 *  Filters
 *----------------------------------------*/
Route::filter('before', function () {
  // Do stuff before every request to your application...
});

Route::filter('after', function ($response) {
  // Do stuff after every request to your application...
});

Route::filter('csrf', function () {
  if (Request::forged()) {
    return Response::error('500');
  }
});

Route::filter('auth', function () {
  if (!Sentry::check()) {
    return Redirect::to('login');
  }

});

/**
 * If user has administrative rights ....
 */
Route::filter('admin', function () {
  if (!\Sentry\Sentry::user()->in_group('admin'))
  {
   return Redirect::to('dashboard');
  }
});
/*-----------------------------*-*-*-*-*/


/*-*-*-*-*-------------------------------
*  Authenticated Routes
*----------------------------------------*/
Route::group(array('before' => 'auth'), function () {
  Route::controller('dashboard');
});

Route::group(array('before'=>'auth|admin'), function(){
  Route::controller('admin');
  Route::controller('group');
});
/*-----------------------------*-*-*-*-*/


/*-*-*-*-*-------------------------------
*  User Registration & Authentication
*----------------------------------------*/
Route::get('reset_password', function () {
  return View::make('user.reset_password');
});

Route::get('join', function () {
  return View::make('user.register');
});

Route::get('logout', function () {
  return Redirect::to_action("user@logout");
});
/*-----------------------------*-*-*-*-*/

