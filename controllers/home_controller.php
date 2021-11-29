<?php

/**
 * Main controller. The router calls it 
 * when 'domain.com/-home-/-index-' is 
 * requested through URL. 
 * 
 * The controller loads a view and returns
 * this view to the user. 
 * 
 */
class home_controller
{
	public function index()
	{
		/** 1.- Creating a view and setting its file. */
		$view = new retriever('view');
		$view->set_file('index.php');

		/** 2.- Rendering the view. */
		$view->render();
	}
}
