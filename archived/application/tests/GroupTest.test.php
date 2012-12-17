<?php
require_once dirname(__FILE__) . '/ControllerTest.test.php';

class GroupTest extends ControllerTest{

  public function setUp()
  {
    Bundle::start('purifier');
    Bundle::start('sentry');
  }


  public function testAdminCanEditGroupIfExists()
  {
    $data = ['name'=>'someGroup','level'=>111];

   $response = $this->post('group@edit', $data, ['id'=>1]);
   $this->assertEquals('200',$response->foundation->getStatusCode());
  }

  public function tearDown(){}


}