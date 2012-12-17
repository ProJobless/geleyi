<?php
class Form_RegisterUser extends FormBase_Model
{

  public static $rules = array(
    'email' => 'required|email',
    'password' => 'required|confirmed'
  );


}