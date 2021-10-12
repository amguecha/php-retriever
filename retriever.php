<?php

/**
 * This class generates a 'loader' or 'retriever' 
 * object to use view files and model classes inside
 * CONTROLLERS. It's kind of a wrapper/extender for 
 * 'include' and 'new class' operations.
 * 
 * @property: $type -> It stores the type of operation
 *            that will be done by the object.                 
 * @property: $file -> It stores the filename that will 
 *            be used to perform operations.
 * @property: $data -> It stores data that will be passed 
 *            to view (creating a context/scope for view).
 * 
 * @method: __construct( $set_type = NULL ) -> Line 36
 * @method: include_file( $filename )       -> Line 52
 * @method: include_data( $dataset = [] )   -> Line 95
 * @method: load_model( $params = NULL )    -> Line 112
 * @method: render_view()                   -> Line 130
 *
 */
class retriever
{
	public $type;
	public $file;
	public $data;

	/** 
	 * It sets the type of operations for later logic.
	 * 
	 * @param: $set_type -> Options: 'model_type'
	 *         or 'view_type'. No more!! 
	 * 
	 */
	public function __construct( $set_type = NULL )
	{
		$this->type = $set_type;
		$this->file = NULL;
		$this->data = NULL;
	}

	/** 
	 * It checks if the file to be loaded exists 
	 * in its directory. For views, it only stores the view
	 * filename. For models, it stores the filename and
	 * also does an 'include'.
	 * 
	 * @param: $filename -> 'filename.php'
	 * 
	 */
	public function include_file( $filename )
	{
		/** Checking if the model has been loaded properly, the file exists, no typos, etc.. */
		if( $this->type == 'model_type' ){
			$this->file = $filename;
			$model_path = MODELS . $filename;
	        if( file_exists($model_path) ){
	        	include( $model_path );
	        }else{
				http_response_code(404);
				trigger_error( 'There was a problem loading the intended model. Message generated' );
				exit();
	        }

	    /** Checking if the view has been loaded properly, the file exists, no typos, etc.. */
		}elseif( $this->type == 'view_type' ){
			$view_path = VIEWS . $filename;
	        if( file_exists($view_path) ){
	        	$this->file = $filename;
	        }else{
				http_response_code(404);
				trigger_error( 'There was a problem loading the intended view. Message generated' );
				exit();
	        }
		}else{
			http_response_code(404);
			trigger_error( 'There was a problem loading the intended view or model. Message generated' );
			exit();
		}

	}

	/** 
	 * It saves an optional data array (associative), which will be then 
	 * used in the view file. Only for VIEWS, models do not accept data.
	 * 
	 * @param: $data -> It's an associative array: [ 'varname' => $var, 
	 * 		   'varname1' => $var1, ... ] In views: <?= $varname => ...
	 * 
	 */
	public function include_data( $dataset = [] )
	{
		if( $this->type == 'model_type' ){
			trigger_error( 'Models do not accept this method. Message generated' );
		}elseif( $this->type = 'view_type' ) {
			$this->data = $dataset;
		}
	}

	/** 
	 * It creates an object of the previous selected model.
	 * 
	 * @param: $params -> The parameters that the selected model, in case,  
	 *         needs in the __constructor: ( param1, param2, ... ).
	 * 		   Example: $object = $loader->load_model().
	 * 
	 */
	public function load_model( $params = NULL )
	{
		if( $this->type == 'model_type' ){
	        
			/** Checking if the class exists. Removing .php from the end. */
	        $class = substr( strval($this->file), 0, -4 );
	        if( class_exists($class) ){
	        	return new $class( $params );
	        }else{
	        	trigger_error( 'Model classname or filename is incorrect. Message generated' );
	        }

		}elseif( $this->type == 'model_view' ){
			trigger_error( 'This object can only include models. Message generated' );
		}
	}

	/** It 'renders' the previously loaded view. */
	public function render_view()
	{
		if( $this->type == 'view_type' ){
			$view_path = VIEWS . $this->file;

			/** 
			 * ob_start() turns ON a buffer and catches all the 
			 * executed code, keeping it from being printed 
			 * until eb_end_flush 'releases' and prints all the
			 * code at once.
			 *  
			 */
			ob_start();

			/** 
			 * It extracts the data array, allowing variables to 
			 * be called as their array Key name. ( 'var' => $variable )
			 * In views simply call: <?= $var ?> !! 
			 * 
			 */
			if( !is_null($this->data) ){
				extract($this->data);
			}
			
        	include( $view_path );
			ob_end_flush();
			
        }else{
        	trigger_error( 'This object was not able to render the view. Message generated' );
        }
	}
}

?>
