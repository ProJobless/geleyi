<?php

class HomeController extends BaseController {

    protected $layout = 'layouts.master';

	public function showWelcome()
	{
		return View::make('landing');
	}

}