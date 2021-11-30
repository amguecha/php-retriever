<?php

/** 
 * These DEFINED CONSTANTS are set to be
 * used by 'database.php', 'router.php' and
 * the views (mostly to build up hrefs). DOMAIN,
 * DEFAULT_CONTROLLER and DEFAULT_ACTION are 
 * usefull to build up URL paths, and they 
 * SHOULD NOT contain '/' at the end !!
 * 
 * There are some RESPONSE HEADERS set by default, 
 * they are used in 'router.php', and sent just
 * before the controllers are called. 
 * Add more if necessary.
 * 
 */
class configuration
{
	/** Database HOST name. */
	const DBHOST = 'localhost';

	/** Database USER. */
	const DBUSER = 'root';

	/** Database user PASS. */
	const DBPASS = 'root';

	/** DATABASE name. */
	const DBNAME = 'php_retriever_main';

	/** 
	 * DOMAIN NAME. Do not add the last '/' !!
	 * If the '/public_html' folder is the one with
	 * server access, DOMAIN will be pointing
	 * to it (it becomes the 'root' directory from
	 * the client side perspective).
	 * 
	 */
	const DOMAIN = 'http://localhost:8080';

	/** DEFAULT CONTROLLER when URL is empty. */
	const DEFAULT_CONTROLLER = 'home_controller';

	/** DEFAULT ACTION when URL is empty. */
	const DEFAULT_ACTION = 'index';

	/** 
	 * DEFAULT HTTP Strict-Transport-Security
	 * response header, in seconds. By default 
	 * the value is 2 years. 0: disabled.
	 * 
	 */
	const HSTS = '63113904';

	/** 
	 * DEFAULT X-Frame-Options for 'iframes'. There are
	 * two posibilities for this response header:
	 * 
	 * SAMEORIGIN: Allows iframes only under the same domain.
	 * DENY: Disables completely iframes anywhere.
	 * 
	 */
	const XFO = 'SAMEORIGIN';
}
