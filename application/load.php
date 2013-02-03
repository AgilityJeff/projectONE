<?php
// Functions ==========================================================================================================
	// Build the system response message - this gets called from the view files (within the html)
		function getMessage()	{
			if ($_SESSION['Model']['status'])	{
				$str = '<span style="color: green; font-weight: bold; ">';
			}	else {
				$str = '<span style="color: red; font-weight: bold;">';
			}
			
			$str .= $_SESSION['Model']['message'] . '</span><br />';
			$_SESSION['Model']['message'] = "";
			return $str;
		}

// Procedure ==========================================================================================================
	// It's just easier to refer to $This instead of constantly typing out the full $_SESSION array name
		if (isset($_SESSION['Model']['This'])) {
			$This = $_SESSION['Model']['This'];
		}
	
	// Build the file url for the view
		$view = "application/views/" . urlencode($page) . ".php";	
	// If the file does not exist, Throw up an error page, otherwise - bark it out!
		if (!is_file($view)) {
			$view = "views/404.php";
		}

		require($view);
?>