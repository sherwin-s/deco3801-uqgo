<?php
	// destroy all the stored session
	session_start();
	session_destroy();
	
	// redirect to admin login page
	header('Location: /v0-6/admin-login.php');
?>