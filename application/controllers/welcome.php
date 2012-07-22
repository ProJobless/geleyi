  <?php

class Welcome_Controller extends Base_Controller {

  public $layout = 'layouts.main';

	public function action_index()
	{
		$this->layout->nest('content','welcome.index');
	}

}