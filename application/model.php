<?php
// Functions ==========================================================================================================

// Procedure ==========================================================================================================
	// Initialize & Instantiate
		// Guilty until proven innocent: the data is bad and we're going nowhere until it's validated and the db is happy!
			$status = FALSE;
			
		// Check for a message and grab it from the SESSION or just set the var for an update
			if (isset($_SESSION['Model']['message']) and trim($_SESSION['Model']['message']) !== "") {
				$msg = $_SESSION['Model']['message'];
			}	else {
				$msg = "";
			}
					
		// Check for Page request - if none, force home
			if (!isset($_GET['page'])) {
				$page = "home";
			} else {
				$page = $_GET['page'];
			}
	
		// Check for a record ID - if none, leave it blank and we'll prepare an empty array with placeholders later
			if (!isset($_GET['id'])) {
				$id = "";
			} else {
				$id = $_GET['id'];
			}

	// @ToDo Establish a connection to the db here...

	// Grab any page-specific functionality & process the $_POST
		$model = "application/models/$page.php";
		if (!is_file($model)) {
			$msg = "Processing error - nothing configured to handle this page.";
		}	else {
			include($model);	
			// If there's a $_POST, grab & cleanse the data... then include the appropriate models file to validate the submission
				if (isset($_POST)) {
					// Cleanse input & put it in the working array
					  foreach($_POST as $key=>$value) {
					    if ($key !== "submit" and $key !== "form") {
					      $value=htmlentities(stripslashes(strip_tags($value)));
					      $This[$key] = $value;
					    }
					    
					  }

					// Validate
						if (isset($This)) {
								if (validate($This)) {
									$status = TRUE;
								}
								
							// Submit to db?  This is where it happens!
								if ($status) {
									
								}
						
						}

				} else {
					$This = prepare($id);
				}
				
		} 
	
	// Advise controller on the results here
		$_SESSION['Model']['status'] = $status;
		$_SESSION['Model']['message'] = $msg;
		if (isset($This)) {
			$_SESSION['Model']['This'] = $This;
		}
?>