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
    	/** 1.- Loading a view (it saves the file to be rendered). */
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'index.php' ); 

		/** 2.- Rendering the view. */
		$loader->render_view();
    }
}

?>