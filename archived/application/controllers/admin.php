<?php

class Admin_Controller extends Base_Controller {


	public function action_users()
	{
    $users = Sentry::user()->all();

		return View::make('admin.users.index')
                                      ->with('users',$users);
	}

}
