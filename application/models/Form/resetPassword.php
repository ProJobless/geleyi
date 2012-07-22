<?php
class Form_ResetPassword extends FormBase_Model
{
  public static $rules = array(
    'email' => 'required|email',
    'password' => 'confirmed|required'
  );
}
