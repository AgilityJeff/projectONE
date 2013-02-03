<?php
// Functions ==========================================================================================================

// Procedure ==========================================================================================================
	// First capture all the data submitted, put it in the right place, then validate & process it
		require('model.php');
	// Figure out what to do based on the status from the model
		require('controller.php');
	// Present the appropriate view
		require('load.php');
?>