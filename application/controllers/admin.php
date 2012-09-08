<?php

class Admin_Controller extends Base_Controller {

  public $layout = 'layouts.main';

	public function action_view_users()
	{
    $users = Sentry::user()->all();

		$this->layout->content =  View::make('admin.manage_users')
                                      ->with('users',$users);
	}

}
