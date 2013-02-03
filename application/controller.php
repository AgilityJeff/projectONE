<?php
// Functions ==========================================================================================================

// Procedure ==========================================================================================================
	// Redirect to Home Page if form was submitted and processed successfully	
		// NOTE: If a page is 'prepared()' it automatically passes FALSE so this redirect is bypassed
			if($_SESSION['Model']['status'])	{
				if (isset($_SESSION['Model']['redirect'])) {
					header("Location: index.php?page=" . $_SESSION['Model']['redirect']);
				} else {
					header("Location: index.php?page=home");
				}
				
			}
?>