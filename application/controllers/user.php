<?php

class User_Controller extends Base_Controller
{

  public $layout = "layouts.main";


  public function action_edit($id)
  {
    $user = Sentry::user((int)$id); //retrieve the user

    if ($_POST) {
      $add_group_id = (int)Purifier::clean(\Laravel\Input::get('add_group'));
      $remove_group_id = (int)Purifier::clean(\Laravel\Input::get('remove_group'));

      try {

        $update = $user->update(
          [
            'username' => Purifier::clean(\Laravel\Input::get('username')),
            'metadata' => [
              'first_name' => Purifier::clean(\Laravel\Input::get('first_name')),
              'last_name' => Purifier::clean(\Laravel\Input::get('last_name')),
              'label' => Purifier::clean(\Laravel\Input::get('label'))
            ]
          ]
        );

        // update group
        if ($add_group_id) $user->add_to_group($add_group_id);

        if ($remove_group_id) $user->remove_from_group($remove_group_id);

        if ($update) {
          return Redirect::back()->with('success', 'User was successfully updated');
        }
      } catch (\Sentry\SentryException $e) {
        return Redirect::back()->with_errors('errors', $e->getMessage());
      }
    } else {

      return View::make('user.edit')->with('user', $user);

    }
  }

  public function action_logout()
  {
    Sentry::logout();
    return Redirect::to("/");
  }

  public function action_profile()
  {
    return View::make("user.profile");
  }

  public function action_seed()
  {

    try {
      //generate a random userName
      $rand_num = (rand(0,9999) * 23);

      $seed_user = array(
        'email' => 'test'.$rand_num.'@geleyi.com',
        'username' => "test{$rand_num}",
        'password' => 'test',
        'metadata' => [
          'first_name' => "Test{$rand_num}",
          'last_name' => "User{$rand_num}"
        ]
      );

      $user_id = Sentry::user()->create($seed_user);

      if ($user_id) {
        return "User created: " .\
          Sentry::user($user_id)->email;
      }
    } catch (\Sentry\SentryException $e) {
      $errors = $e->getMessage();
      return $errors;
    }

  }
}
