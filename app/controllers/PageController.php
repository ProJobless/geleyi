<?php

class PageController extends BaseController {

  /**
   * This is a first time guest,
   * give them some geleyi loving
   *
   * @return Laravel\View
   */
  public function showWelcome()
	{
		return View::make('pages.welcome');
	}

  /**
   * If this is not a first time guest,
   * start where they left off
   * @return Laravel\View
   */
  public function showIndex()
  {
    return View::make('pages.home');
  }

}

