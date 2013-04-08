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


Route::get('subscribe', function () {

    $apikey = '6e34cfe71e585e702cd74a2e167b1526-us5';
    $mc_api = new \Mailchimp\MCAPI($apikey);
//    $list_id = $mc_api->lists()['data'][0]['id']; //Coming  Soon Subscribers
    $list_id = '6843d47bc4'; //Coming  Soon Subscribers
    $email = $_GET['email'];
    

    $data  = ['FNAME'=>'', 'LNAME' => ''];
    
    // this is a double opt-in process, users have to 
    // confirm from their emails before being signed up
    //mailchimp returns a bool
    if( $list_id ){
    	$return_data = $mc_api->listSubscribe($list_id, $email, $data, $email_type = 'html');

//        dd( $return_data );
    }

    return $return_data ? $email : false;

});
