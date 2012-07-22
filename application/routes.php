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
 */
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
 */
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
    return Redirect::to('login');
  }

});
/*-----------------------------*-*-*-*-*/


/*-*-*-*-*-------------------------------
*  Authenticated Routes
*/
Route::group(array('before'=> 'auth'), function()
{
  // Route for Dashboard_Controller
  Route::controller('dashboard');

  Route::controller('admin');
});
/*-----------------------------*-*-*-*-*/


/*-*-*-*-*-------------------------------
*  User Registration & Authentication
*/
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


/*-*-*-*-*-------------------------------
 *  Assest Management
 */

Bundle::start('basset');

Basset::styles('app', function($styles)
{
  $styles->add('buttons', 'css/foundation-style/buttons.css')
    ->add('forms', 'css/foundation-style/forms.css')
    ->add('globals', 'css/foundation-style/globals.css')
    ->add('grid', 'css/foundation-style/grid.css')
    ->add('navbar', 'css/foundation-style/navbar.css')
    ->add('orbit', 'css/foundation-style/orbit.css')
    ->add('reveal', 'css/foundation-style/reveal.css')
    ->add('tabs', 'css/foundation-style/tabs.css')
    ->add('typography', 'css/foundation-style/typography.css')
    ->add('ui', 'css/foundation-style/ui.css')
    ->add('app', 'app.css');
});

Basset::scripts('header', function($scripts)
{
  $scripts->add('modernizer', 'js/foundation/modernizr.foundation.js');
});

Basset::scripts('app', function($scripts)
{
  $scripts->add('jquery', 'jquery.min.js')
    ->add('custom-forms', 'js/foundation/jquery.customforms.js')
    ->add('orbit', 'js/foundation/jquery.orbit-1.4.0.js')
    ->add('placeholder', 'js/foundation/jquery.placeholder.min.js')
    ->add('reveal', 'js/foundation/jquery.reveal.js')
    ->add('tooltips', 'js/foundation/jquery.tooltips.js')
    ->add('jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.js')
    ->add('ember', 'js/libs/ember-0.9.8.1.min.js')
    ->add('app', 'app.js');
});
/*-----------------------------*-*-*-*-*/



