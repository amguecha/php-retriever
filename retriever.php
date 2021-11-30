<?php

/**
 * This class generates VIEW/MODEL objects, to be used 
 * inside CONTROLLERS. It's like a wrapper or extended 
 * function of 'include' and 'new class'.
 * 
 * @property: $type -> It stores the type of object, 
 *                     it can be set to VIEW or MODEL.           
 * @property: $file -> It stores the FILENAME of the 
 *                     view or model to be created.
 * @property: $data -> It stores in an array the DATASET 
 *                     that will be used outside the controller, 
 *                     either in the view or the model. 
 * 
 * @method: __construct( $set_type = NULL ) -> Line 35 
 * @method: set_file( $filename )           -> Line 49 
 * @method: set_data( $dataset = [] )       -> Line 87 
 * @method: call()                          -> Line 100 
 * @method: render()                        -> Line 130 
 *
 */
class retriever
{
	public $type;
	public $file;
	public $data;

	/** 
	 * It sets the type of object to be instantiated.
	 * 
	 * @param: $set_type -> Options: 'model' or 'view'.
	 * 
	 */
	public function __construct($set_type)
	{
		$this->type = $set_type;
		$this->file = NULL;
		$this->data = NULL;
	}

	/** 
	 * Setting the model/view FILE. It makes sure that the file exists
	 * and also clears the filesystem cache after the check.
	 * 
	 * @param: $filename -> 'filename_model.php' or 'filename_view.php'.
	 * 
	 */
	public function set_file($filename)
	{
		/** Checking the assigned file for MODELS. */
		if ($this->type === 'model') {
			if (file_exists(MODELS . $filename)) {
				$this->file = $filename;
				clearstatcache();
			} else {
				http_response_code(500);
				trigger_error('Incorrect model filename (' . MODELS . $filename . ')');
				exit();
			}
			/** Checking the assigned file for VIEWS. */
		} elseif ($this->type === 'view') {
			if (file_exists(VIEWS . $filename)) {
				$this->file = $filename;
				clearstatcache();
			} else {
				http_response_code(404);
				trigger_error('Incorrect view filename (' . VIEWS . $filename . ')');
				exit();
			}
		}
	}

	/** 
	 * It sets an OPTIONAL DATA ARRAY, which can be then used in the view 
	 * or model. For views, only associative arrays are allowed. For models, 
	 * any type of array can be used.
	 * 
	 * @param: $data -> ** To expose data to be printed in VIEWS, setting data in controllers: 
	 *                  [ 'varname' => $var, 'varname1' => $var1, ... ].
	 *                  Accessing data in views: <?= $varname => ... 
	 *                  ** To pass data and use it in MODELS classes, setting data in controllers:
	 * 		            [ $var1, $var2, $var3, ... ].
	 * 		            Accessing data in models: $var1 = $arrayname[0], var2 = ...[1] ...
	 * 
	 */
	public function set_data($dataset = [])
	{
		$this->data = $dataset;
	}

	/** 
	 * Way of CALLING the instantiated MODEL METHODS inside the controller. Only
	 * instantiated MODEL objects can use this method.
	 * 
	 * @param: $params -> Parameters that the selected model method, in case, needs.  
	 *                    $model->call()->the_model_method($params).
	 * 
	 */
	public function call()
	{
		if ($this->type === 'model') {
			/** 
			 * Checking if the class exists inside the model file. Removing .php 
			 * from the end, also including and instantiating the model object.
			 */
			$class = substr(strval($this->file), 0, -4);
			if (class_exists($class)) {
				include_once(MODELS . $this->file);
				return new $class($this->data);
			} else {
				http_response_code(500);
				trigger_error('Incorrect model classname (' . $class . ')');
				exit();
			}
		} else {
			/** Other object types, different from 'model', will trigger an error. */
			http_response_code(404);
			trigger_error('This object type (' . $this->type . ') can not return model methods');
			exit();
		}
	}

	/** 
	 * Way of RENDERING the VIEW, and in case, assigning variables passed from
	 * the controller to the new view scope. Only instantiated VIEW objects can use 
	 * this method.
	 * 
	 */
	public function render()
	{
		if ($this->type === 'view') {
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
			 * be called as their array Key Name values. 
			 * A variable assigned in a controller as [ 'var' => $variable ], 
			 * will be available on the view by simple calling <?= $var ?> !! 
			 * 
			 */
			if (!is_null($this->data)) {
				extract($this->data);
			}
			include_once(VIEWS . $this->file);
			ob_end_flush();
		} else {
			/** Other object types, different from 'view', will trigger an error. */
			http_response_code(404);
			trigger_error('This object type (' . $this->type . ') was not able to render the view');
			exit();
		}
	}
}
