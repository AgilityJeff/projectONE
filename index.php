<?php
/*	The Minimalist MVC (c) 2013 - Jeff Riedl (GitHub - AgilityJeff)
*/
// Functions ==========================================================================================================

// Procedure ==========================================================================================================
	// Check for a session, if not started, get one going!
		if (!isset($_SESSION)) {
			// No proxies for you!
				session_cache_limiter('private');
			/* set the cache expire to 15 minutes */
				session_cache_expire(15);
				session_start();
		}
	
	// Dev stuff (@ToDo - Coment out when this goes live)
	  	error_reporting(E_ALL);
	  	ini_set("display_errors", 1);
	// Start the application...
		require('application/miniMVC.php');
?>
