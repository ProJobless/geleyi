<?php

class User_Controller extends Base_Controller {

	public $layout = "layouts.main";

	public function action_register()
	{
		$this->layout->nest('content','user.register');
	}

 public function action_profile()
 {
    $this->layout->nest('content','user.profile');
 }

 public function action_login()
 {
 	$this->layout->nest('content','user.login');
 }

 public function action_edit($id)
 {
   $user = Sentry::user((int) $id);
   $this->layout->content = View::make('user.edit')
     ->with('user',$user);
 }

public function action_logout()
{
  Sentry::logout();
  return Redirect::to("/");
}


}
