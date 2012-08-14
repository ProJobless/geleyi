<?php

class Base_Controller extends Controller {

public function __construct()
{
  parent::__construct();

  //Initialize Assets
  Asset::add('app','css/app.css');
  Asset::container('header')->add('modernizer','js/libs/modernizr.foundation.js');

  Asset::container('footer')->add('plugins','js/plugins.js');
  Asset::container('footer')->add('app','js/app.js');
}

  /**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}