<?php

/**
 * URL router based on $_SERVER['REQUEST_URI'].
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
		/** Sending RESPONSE HEADERS. Add more here if needed. */
		header('strict-transport-security: max-age=' . configuration::HSTS);
		header('x-frame-options:' . configuration::XFO);

		/** Getting number of section delimiters '/' in URL */
		$uri_s = substr_count($_SERVER['REQUEST_URI'], '/');

		/** 
		 * CHECKING and FILTERING the URL structure (www.domain.com/section/section/). 
		 * More section delimiters are not supported by default on this framework.
		 * 
		 */
		if ($uri_s <= 3) {

			/** 
			 * INCLUDING URL variable names and values as sections,
			 * so they do not get 'jammed' with any controller name
			 * or method on the next URL filters.
			 * 
			 */
			$replace = array('?', '&', '=');
			$request = str_replace($replace, '/', $_SERVER['REQUEST_URI']);
			$uri = explode('/', $request);

			/** Setting up variables with the default controller and action names */
			$defautl_c = configuration::DEFAULT_CONTROLLER;
			$defautl_a = configuration::DEFAULT_ACTION;

			/** www.domain.com/a/b/ but, NOT pointing to defaults */
			if ($uri_s == 3 && !empty($uri[1]) && !empty($uri[2]) && empty($uri[3])) {
				$controller = $uri[1] . '_controller';
				$action = $uri[2];
				if ($controller === $defautl_c && $action === $defautl_a) {
					goto Not_Found;
				}
			}
			/** www.domain.com/a/b but, NOT pointing to defaults */
			elseif ($uri_s == 2 && !empty($uri[1]) && !empty($uri[2])) {
				$controller = $uri[1] . '_controller';
				$action = $uri[2];
				if ($controller === $defautl_c && $action === $defautl_a) {
					goto Not_Found;
				}
			}
			/** www.domain.com/a/ but, NOT pointing to defaults */
			elseif ($uri_s == 2 && !empty($uri[1]) && empty($uri[2])) {
				$controller = configuration::DEFAULT_CONTROLLER;
				$action = $uri[1];
				if ($action === $defautl_a) {
					goto Not_Found;
				}
			}
			/** www.domain.com/a but, NOT pointing to defaults */
			elseif ($uri_s == 1 && !empty($uri[1])) {
				$controller = configuration::DEFAULT_CONTROLLER;
				$action = $uri[1];
				if ($action === $defautl_a) {
					goto Not_Found;
				}
			}
			/** (DEFAULT) www.domain.com/ */
			elseif ($uri_s == 1 && empty($uri[1])) {
				$controller = configuration::DEFAULT_CONTROLLER;
				$action = configuration::DEFAULT_ACTION;
			}
			/** NOT SUPPORTED. URL falls out of previous filters. */
			else {
				goto Not_Found;
			}

			/** NOT SUPPORTED. URL with more than 3 section delimiters. */
		} else {
			goto Not_Found;
		}

		/** Controller file PATH. */
		$controller_path = CONTROLLERS . $controller . '.php';

		/** Checking if CONTROLLER FILE exists. */
		if (!is_file($controller_path)) {
			goto Not_Found;
		}

		/** 
		 * Checking if REQUESTED METHOD exists. Default error handler. 
		 * NOTE: Error pages are included DIRECTLY from this router, 
		 * no controllers or models are involved in here.
		 * 
		 */
		if (!method_exists($controller, $action)) {
			Not_Found:
			http_response_code(404);
			include_once(VIEWS . 'errors/404.php');
			trigger_error('Page not found. Arguments in URI do not match any route');
			exit();
		}

		/** 
		 * Note: Using the function 'method_exists' in the previous check  
		 * WILL INCLUDE the file automatically, this is a fallback call just 
		 * to visualize all the process flow. 
		 * 
		 */
		include_once($controller_path);

		/** CALLING the CLASS and METHOD. */
		$controller = new $controller();
		$controller->$action();
	}
}
