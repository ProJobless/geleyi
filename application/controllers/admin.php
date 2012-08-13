<?php

class Admin_Controller extends Base_Controller {

	public function action_index()
	{
		return View::make('admin.index');
	}

	public function action_view_users()
	{
    $users = \Sentry\Sentry::user()->all();
		return View::make('admin.view_users')->with('users',$users);
	}

}
