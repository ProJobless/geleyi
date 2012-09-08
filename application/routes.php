<?php

Route::get('/', function()
{
  return Redirect::to('welcome');
});

Route::controller('auth');
Route::controller('user');
Route::controller('welcome');


/*-*-*-*-*-------------------------------
 *  Listeners
 *----------------------------------------*/
Event::listen('404', function()
{
  return Response::error('404');
});

Event::listen('500', function()
{
  return Response::error('500');
});
/*-----------------------------*-*-*-*-*/


/*-*-*-*-*-------------------------------
 *  Filters
 *----------------------------------------*/
Route::filter('before', function()
{
  // Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
  // Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
  if (Request::forged()) {
    return Response::error('500');
  }
});

Route::filter('auth', function()
{
  if (!Sentry::check()) {
    return Redirect::to('user/login');
  }

});
/*-----------------------------*-*-*-*-*/


/*-*-*-*-*-------------------------------
*  Authenticated Routes
*----------------------------------------*/
Route::group(array('before'=> 'auth'), function()
{
  // Route for Dashboard_Controller
  Route::controller('dashboard');

  Route::controller('admin');
});
/*-----------------------------*-*-*-*-*/


/*-*-*-*-*-------------------------------
*  User Registration & Authentication
*----------------------------------------*/
Route::get('reset_password', function()
{
  return View::make('user.reset_password');
});

Route::get('register', function()
{
  return Redirect::to_action('user@register');
});

Route::get('logout', function()
{
  return Redirect::to_action("user@logout");
});
/*-----------------------------*-*-*-*-*/


// Route for Group_Controller
Route::controller('group');

// Route for Group_Controller
Route::controller('group');

// Route for Junk_Controller
Route::controller('junk');