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

		$view = new retriever('view');
		$view->set_file('index.php');

		$model = new retriever('model');
		$model->set_file('home_model.php');

		$view->set_data([
			'secondary_heading' => $model->call()->data()
		]);

		$view->render();
	}
}
