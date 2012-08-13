<?php
require_once dirname(__FILE__) . '/ControllerTest.test.php';


class AdminTest extends ControllerTest {

  public function testCanViewAllUser()
  {
    Bundle::start('sentry');
    $user = \Sentry\Sentry::user()->all();
    $response = $this->get('admin@view_users',array());

    $this->assertEquals('200',$response->foundation->getStatusCode());
    $this->assertNotNull($user);
  }

  public function testCanAddNewUsers()
  {
    //@todo: admin can add new users
  }

  public function testCanEditUser()
  {
    //@todo: can Edit user settings
  }

  public function testCanDeleteUsers()
  {
    //@todo: admin can delete users
  }

  public function testCanAssignUserToGroup()
  {
    //@todo: can assign user to a group
  }

  public function testCanCreateNewGroup()
  {
    //@todo: can create new group
  }




}

