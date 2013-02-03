<?php
// Functions ==========================================================================================================



// Procedure ==========================================================================================================
	// Initialize essential vars
		$title = "Home";
		$message = getMessage();
	
	// Form body in html:
?>
	<h1><?=$title ?></h1>
	<hr />
	<!-- Content Starts -->
								&nbsp;<br />
								<?php echo $message; ?>
								&nbsp;<br />
								<form action="?page=<?=$page ?>" method="post">
									<input type="hidden" name="form" value="<?=$page ?>" />
									Welcome to the home page for the Minimalist MVC!
								</form>