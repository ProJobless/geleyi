<?php

require_once dirname(__FILE__) . '/ControllerTest.test.php';

class RouteTest extends ControllerTest
{


  /*
   * Test the the homepage resolves
   * @return void
   */
  public function testHomePageResolves()
  {
    $response = $this->get('welcome@index',array());
    $this->assertNotEquals('404', $response->foundation->getStatusCode());
  }

}
