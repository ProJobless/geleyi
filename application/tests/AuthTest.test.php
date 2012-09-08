<?php
require_once dirname(__FILE__) . '/ControllerTest.test.php';

class AuthTest extends ControllerTest
{

  public function setUp()
  {
    Bundle::start('purifier');
    Bundle::start('sentry');
  }
  public function testUserCanLoginToDashboard()
  {

    $data     = array(
      'username' => 'delomos@gmail.com',
      'password' => 'test'
    );
    $response = $this->post('auth@login', $data);
    $this->assertEquals('200', $response->foundation->getStatusCode());
  }

  public function testUserLoginWithNoDataHasError()
  {
    Bundle::start('purifier');
    Bundle::start('sentry');

    $response = $this->post('auth@login', array());

    $session_errors = Session::instance()->get('errors');
    $this->assertNotNull('', $session_errors);
  }

}
