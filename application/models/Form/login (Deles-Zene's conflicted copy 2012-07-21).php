<?php

class Form_Login extends FormBase_Model
{
    public static $rules = array(
      'email' => 'required|email',
      'password' => 'required'
    );
}
