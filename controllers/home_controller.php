<?php

/**
 * Default CONTROLLER CLASS and METHOD. The router 'calls' it 
 * when 'domain.com/-home-/-index-' is requested through URL. 
 * 
 */
class home_controller
{
	public function index()
	{
		/** SAMPLE CONTENT. Edit or delete it to start a clean project. */
		
		$var_a = 'Simple ';
		$var_b = 'MVC Front Controller ';

		$model = new retriever('model');
		$model->set_file('home_model.php');
		$model->set_data([
			'a' => $var_a
		]);

		$view = new retriever('view');
		$view->set_file('index.php');
		$view->set_data([
			'secondary_heading' => $model->call()->data($var_b)
		]);

		$view->render();
	}
}
