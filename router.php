<?php

	/**
	* URL router based in $_SERVER['REQUEST_URI'].
	* It filters the URL, looks for controller names,
	* action names, and loads the requested class placed 
	* in a file of the same name inside the folder 
	* '/controllers'.
	* 
	* @method: start() -> Line 15
	* 
	*/
	class router
	{
		static function start()
		{
			/** Sending response headers first. Add more here if needed. */
			header("strict-transport-security: max-age=".configuration::HSTS);
			header("x-frame-options:".configuration::XFO);

			/** Number of section delimiters '/' in URL */
			$uriSections = substr_count($_SERVER['REQUEST_URI'], '/');

			/** 
			* Checking and filtering the URL structure
			* if there are 3 or less section delimiters (www.domain.com/section/section/). 
			* More section delimiters are not supported by default on this framework.
			* 
			*/
			if( $uriSections <= 3 ){

				/** 
				* Including URL variable names and values as sections,
				* so they do not get 'jammed' with any controller name
				* or method on the next URL filters.
				* 
				*/
				$replace = array( '?', '&', '=' );
				$request = str_replace( $replace, '/', $_SERVER['REQUEST_URI']);
				$uri = explode( '/', $request );

				/** Filter 1: URL looks like: www.domain.com/a/b/ */
				if( $uriSections == 3 && !empty($uri[1]) && !empty($uri[2]) && empty($uri[3]) ){
					$controllerName = $uri[1] . '_controller';
					$actionName = $uri[2];
				}
				/** Filter 2: URL looks like: www.domain.com/a/b */
				elseif( $uriSections == 2 && !empty($uri[1]) && !empty($uri[2])  ){
					$controllerName = $uri[1] . '_controller';
					$actionName = $uri[2];
				}
				/** Filter 3: URL looks like: www.domain.com/a/ */
				elseif( $uriSections == 2 && !empty($uri[1]) && empty($uri[2])){
					$controllerName = configuration::DEFAULT_CONTROLLER;
					$actionName = $uri[1];
				}
				/** Filter 4: URL looks like: www.domain.com/a */
				elseif( $uriSections == 1 && !empty($uri[1]) ){
					$controllerName = configuration::DEFAULT_CONTROLLER;
					$actionName = $uri[1];
				}
				/** Filter 5 (DEFAULT): URL looks like: www.domain.com/ */
				elseif( $uriSections == 1 && empty($uri[1]) ){
					$controllerName = configuration::DEFAULT_CONTROLLER;
					$actionName = configuration::DEFAULT_ACTION;
				}
				/** URL falls out of previous filters. */
				else{
					http_response_code(404);
					include_once( VIEWS . 'errors/404.php');
					trigger_error( 'Page not found. Arguments in URI do not match any class or method. Message generated ' );
					exit();
				}

			/** URL with more than 3 section delimiters, not supported. */	
			}else{
				http_response_code(404);
				include_once( VIEWS . 'errors/404.php');
				trigger_error( 'Page not found. Too many slash delimiters found in URI. Message generated ' );
				exit();
			}

			/** Controller file path. */	
			$controllerPath = CONTROLLERS . $controllerName . '.php';

			/** Checking if the controller file exists, triggering error if not. */	
			if( !is_file($controllerPath) ){
				http_response_code(404);
				include_once( VIEWS . 'errors/404.php');
				trigger_error( 'Page not found. There is no such controller file: <b>' . $controllerPath . '</b>. Message generated ' );
				exit();
			}

			/** Checking if the requested method exists in the controller class, triggering error if not. */		
			if( !method_exists($controllerName, $actionName) ){
				http_response_code(404);
				include_once( VIEWS . 'errors/404.php');
				trigger_error( 'Page not found. This method (<b>' . $actionName . '</b>) is not present in <b>' . $controllerPath . '</b>. Message generated ' );
				exit();
			}

			/** 
			* Using the function'method_exists' in the previous check  
			* will include the file automatically, this is a 
			* fallback call, just in case. 
			* 
			*/	
			include_once($controllerPath);

			/** Calling the class and method. */
			$controller = new $controllerName();
			$controller->$actionName();
		}
	}

?>
