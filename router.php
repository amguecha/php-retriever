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
		$uriSections = substr_count($_SERVER['REQUEST_URI'], '/');

		/** 
		 * CHECKING and FILTERING the URL structure (www.domain.com/section/section/). 
		 * More section delimiters are not supported by default on this framework.
		 * 
		 */
		if ($uriSections <= 3) {

			/** 
			 * INCLUDING URL variable names and values as sections,
			 * so they do not get 'jammed' with any controller name
			 * or method on the next URL filters.
			 * 
			 */
			$replace = array('?', '&', '=');
			$request = str_replace($replace, '/', $_SERVER['REQUEST_URI']);
			$uri = explode('/', $request);

			/** www.domain.com/a/b/ */
			if ($uriSections == 3 && !empty($uri[1]) && !empty($uri[2]) && empty($uri[3])) {
				$controllerName = $uri[1] . '_controller';
				$actionName = $uri[2];
			}
			/** www.domain.com/a/b */
			elseif ($uriSections == 2 && !empty($uri[1]) && !empty($uri[2])) {
				$controllerName = $uri[1] . '_controller';
				$actionName = $uri[2];
			}
			/** www.domain.com/a/ */
			elseif ($uriSections == 2 && !empty($uri[1]) && empty($uri[2])) {
				$controllerName = configuration::DEFAULT_CONTROLLER;
				$actionName = $uri[1];
			}
			/** www.domain.com/a */
			elseif ($uriSections == 1 && !empty($uri[1])) {
				$controllerName = configuration::DEFAULT_CONTROLLER;
				$actionName = $uri[1];
			}
			/** (DEFAULT) www.domain.com/ */
			elseif ($uriSections == 1 && empty($uri[1])) {
				$controllerName = configuration::DEFAULT_CONTROLLER;
				$actionName = configuration::DEFAULT_ACTION;
			}
			/** URL falls out of previous filters. */
			else {
				http_response_code(404);
				include_once(VIEWS . 'errors/404.php');
				trigger_error('Page not found. Arguments in URI do not match any class or method');
				exit();
			}

		/** NOT SUPPORTED. URL with more than 3 section delimiters. */
		} else {
			http_response_code(404);
			include_once(VIEWS . 'errors/404.php');
			trigger_error('Not supported address. Too many slash delimiters found in URI');
			exit();
		}

		/** CONTROLLER FILE path. */
		$controllerPath = CONTROLLERS . $controllerName . '.php';

		/** Checking if the CONTROLLER FILE exists, triggering error if not. */
		if (!is_file($controllerPath)) {
			http_response_code(404);
			include_once(VIEWS . 'errors/404.php');
			trigger_error('Page not found. There is no such controller file: ' . $controllerPath);
			exit();
		}

		/** Checking if the REQUESTED METHOD exists in the controller class, triggering error if not. */
		if (!method_exists($controllerName, $actionName)) {
			http_response_code(404);
			include_once(VIEWS . 'errors/404.php');
			trigger_error('Page not found. This method (' . $actionName . ') is not present in ' . $controllerPath);
			exit();
		}

		/** 
		 * Note: Using the function 'method_exists' in the previous check  
		 * WILL INCLUDE the file automatically, this is a 
		 * fallback call, just in case. 
		 * 
		 */
		include_once($controllerPath);

		/** CALLING the CLASS and METHOD. */
		$controller = new $controllerName();
		$controller->$actionName();
	}
}
