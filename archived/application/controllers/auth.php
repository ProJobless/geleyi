<?php

class Auth_Controller extends Base_Controller { 

  public function action_login()
  {
    //@todo: upon successfully logining,depending on the group person belongs to route to login accordingly
    $email = Purifier::clean(Input::get('email'));
    $password = Purifier::clean(Input::get('password'));
    $remember_me = (Input::get('remember_me')) ? true : false ;

    try
    {
      $valid_login = Sentry::login($email,$password, $remember_me);

      if ($valid_login)
      {
        return Redirect::to('dashboard');
      }
      else
      {
        Redirect::back()->with('bad_login','Please try again, something strange happened');
      }
    }
    catch(SentryException $e)
    {
      $errors = $e->getMessage();
      Redirect::back()->with_input()->with_errors($errors);
    }
  }

  public function action_register()
  {

    if (Form_RegisterUser::is_valid()) {

      $name     = explode("@",Input::get("email"));
      $email    = Input::get("email");
      $password = Input::get("password");

      try {
        $user = Sentry::user()->register(array(
                                              'username' => $name[0],
                                              'email'    => $email,
                                              'password' => $password,
                                         ));

        if ($user) {
          $link = URL::base().'/auth/activate/' . $user['hash'];

          //send email
          $message    = Message::to($email)
            ->from("me@us.com", "Geleyi")
            ->subject("Activate you Account on Geleyi")
            ->body("<h1>Hey $name[0]!</h1><h2>We glad to have you on geleyi, <a href=$link>Activate Account</a></h2>")
            ->html(true)
            ->send();
          echo "Please login to " . HTML::link("http://$name[1]", "your email") . " to verify now <br/>";
        } else {
          echo "Registeration Didn't happen";
        }
      }
      catch (\Sentry\SentryException $e) {
        $errors = $e->getMessage();
        Redirect::back()->with_errors($errors);
      }
    } else {
        return Redirect::back()->with_input()->with_errors(Form_RegisterUser::$validation);
    }

  }

  public function action_activate($hashed_email, $hash)
  {
    try {
      $activate_user = Sentry::activate_user(base64_decode($hashed_email), $hash, false);

      if ($activate_user)
      {
        try
        {
              echo "You are awesome, ". HTML::link('login','Login now');
        }
        catch(\Sentry\SentryException $e)
        {
          $errors = $e->getMessage();
          Redirect::to_route('auth@login')->with_errors($errors);
        }
      }
      else
      {
        echo "Something went wrong went wrong, not logged in.";
      }
    }
    catch (\Sentry\SentryException $e) {
      Redirect::back()->with_errors($e->getMessage());

    }
  }

  public function action_reset_password()
  {
    $input_email = Purifier::clean(Input::get('email'));
    $new_password = Purifier::clean(Input::get('password'));

    try
    {
      $reset = Sentry::reset_password($input_email,$new_password);

      if($reset)
      {
        $email = $reset['email'];
        $link = URL::base() ."/auth/confirm_password/".$reset['link'];

        $message    = Message::to($email)
                    ->from("me@us.com", "Geleyi")
                    ->subject("Reset password")
                    ->body("$link")
                    ->html(true)
                    ->send();

        if($message->was_sent($email))
        {
          echo "Mail sent, verify <br/>";
        }
        else
        {
          echo "Email wasn't sent";
        }
      }
      else
      {
        echo "Could not send your message";
      }
    }
    catch(\Sentry\SentryException $e)
    {
      $errors = $e->getMessage();
      Redirect::back()->with_errors($errors);

    }
  }

  public function action_confirm_password($hased_email, $hash)
  {
    try
    {
      $confirm_reset = Sentry::reset_password_confirm($hased_email, $hash, true);

      if($confirm_reset)
      {
        return Redirect::to('login');
      }
      else
      {
        echo "Not working";
      }
    }
    catch(\Sentry\SentryException $e)
    {
      $errors = $e->getMessage();
      //Redirect::back()->with_errors($errors);
    }
  }
}
