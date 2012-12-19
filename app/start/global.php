<?php

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a rotating log file setup which creates a new file each day.
|
| We will bind this setup routine inside a Closure. This allows us to not
| actually include the logger files until something really needs to be
| logged by your application, speed up requests that don't use logs.
|
*/

App::bind('log.setup', function () {
  return function ($logger) {
    $logger->useDailyFiles(__DIR__ . '/../storage/logs/log.txt');
  };
});

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function (Exception $exception, $code) {
  Log::error($exception);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require __DIR__ . '/../filters.php';

/**
 * Main for the site
 */

Basset::collection('header', function ($header) {
  $header->add('stylesheets/app.css');

  $header->add('javascripts/foundation/modernizr.foundation.js');
});


Basset::collection('app', function ($main) {
  $main->add('javascripts/libs/can.jquery.js');
  $main->add('javascripts/app.js');
});


// From Librares
Basset::collection('foundation', function ($foundation) {

  $foundation->add('javascripts/foundation/jquery.js');
  $foundation->add('javascripts/foundation/jquery.cookie.js');
  $foundation->add('javascripts/foundation/jquery.event.move.js');
  $foundation->add('javascripts/foundation/jquery.event.swipe.js');
  $foundation->add('javascripts/foundation/jquery.foundation.accordion.js');
  $foundation->add('javascripts/foundation/jquery.foundation.alerts.js');
  $foundation->add('javascripts/foundation/jquery.foundation.buttons.js');
  $foundation->add('javascripts/foundation/jquery.foundation.clearing.js');
  $foundation->add('javascripts/foundation/jquery.foundation.forms.js');
  $foundation->add('javascripts/foundation/jquery.foundation.joyride.js');
  $foundation->add('javascripts/foundation/jquery.foundation.magellan.js');
  $foundation->add('javascripts/foundation/jquery.foundation.mediaQueryToggle.js');
  $foundation->add('javascripts/foundation/jquery.foundation.navigation.js');
  $foundation->add('javascripts/foundation/jquery.foundation.orbit.js');
  $foundation->add('javascripts/foundation/jquery.foundation.reveal.js');
  $foundation->add('javascripts/foundation/jquery.foundation.tabs.js');
  $foundation->add('javascripts/foundation/jquery.foundation.tooltips.js');
  $foundation->add('javascripts/foundation/jquery.foundation.topbar.js');
  $foundation->add('javascripts/foundation/jquery.offcanvas.js');
  $foundation->add('javascripts/foundation/jquery.placeholder.js');
  $foundation->add('javascripts/foundation/app.js');

});