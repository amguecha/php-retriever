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
		/**
		 * It checks and filters the URL structure.
		 * ( www.domain.com/'foo'/'var' ) routes to
		 * fooController and var() method inside '/controllers'.
		 * ( www.domain.com'/' ) routes to defaults.
		 * Every other posibility will cause a 404 error.
		 * 
		 */
		if( substr_count($_SERVER['REQUEST_URI'], '/') === 2 ){

			/** URL looks like: ( www.domain.com'/'foo'/'var' ). Then, all OK */
			$replace = array( '?', '&', '=' );
			$request = str_replace( $replace, '/', $_SERVER['REQUEST_URI']);
			$url = explode( '/', $request );
			$controllerName = $url[1] . '_controller';
			$actionName = $url[2];

		}elseif( substr_count($_SERVER['REQUEST_URI'], '/') === 1 ){

			/** URL looks like: ( www.domain.com'/' ) or ( www.domain.com'/'foo' ) */
			$replace = array( '?', '&', '=' );
			$request = str_replace( $replace, '/', $_SERVER['REQUEST_URI']);
			$url = explode( '/', $request );
			if( empty($url[1]) ) {

				/** URL looks like: ( www.domain.com'/' ). Then, defaults are set */
				$controllerName = configuration::DEFAULT_CONTROLLER;
				$actionName = configuration::DEFAULT_ACTION;

			}else{
				http_response_code(404);
				include( VIEWS . 'errors/404.php');
				trigger_error( 'Page not found. Message generated' );
				exit();
			}
		}else{
			http_response_code(404);
			include( VIEWS . 'errors/404.php');
			trigger_error( 'Page not found. Message generated' );
			exit();
		}

		/** Creating the path to find controllers (classes and methods). */
		$controllerPath = CONTROLLERS . $controllerName . '.php';

		/** Checking wether the class file exists or not. */
		if( is_file($controllerPath) ){
			require $controllerPath;
		}else{
			http_response_code(404);
			include( VIEWS . 'errors/404.php');
			trigger_error( 'Page not found. Message generated' );
			exit();
		}
		if( is_callable(array($controllerName, $actionName)) == false){
			http_response_code(404);
			include( VIEWS . 'errors/404.php');
			trigger_error( 'Page not found. Message generated' );
			exit();
		}

		/** Sending response headers first. Add more here if needed. */
		header("strict-transport-security: max-age=".configuration::HSTS);
		header("x-frame-options:".configuration::XFO);

		/** Calling the class and method. */
		$controller = new $controllerName();
		$controller->$actionName();
	}
}

?>