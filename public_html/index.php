<?php

/** 
 * Main application paths. These constants are 
 * set to be used on SERVER SIDE files, not in 
 * views or parts of code that are going to be 
 * exposed to browsers. They end with '/'.
 * 
 */
define('ROOT',        dirname( __DIR__ )   . DIRECTORY_SEPARATOR);
define('VIEWS',       ROOT . 'views'       . DIRECTORY_SEPARATOR);
define('MODELS',      ROOT . 'models'      . DIRECTORY_SEPARATOR);
define('CONTROLLERS', ROOT . 'controllers' . DIRECTORY_SEPARATOR);

/** Saving paths in array. */
$modules = [ ROOT, VIEWS, MODELS, CONTROLLERS ];

/** Setting up the script with system paths. */
set_include_path( get_include_path() . PATH_SEPARATOR . implode( PATH_SEPARATOR, $modules ) );

/** Setting up autoloader. */
spl_autoload_register('spl_autoload');

/** Basic context constants. Check configuration.php */
define('DBHOST', configuration::DBHOST );
define('DBUSER', configuration::DBUSER );
define('DBPASS', configuration::DBPASS );
define('DBNAME', configuration::DBNAME );
define('DOMAIN', configuration::DOMAIN );

/** Starting the router. */
router::start();

?>
