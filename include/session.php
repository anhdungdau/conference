<?php 
	include('../registration/functions.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must login first";
		header('location: ../registration/login.php');
	}
?>