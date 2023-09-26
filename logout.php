<?php  
session_start();

		session_destroy();
		session_unset();
		header("location:slider-login-page.php");

?>