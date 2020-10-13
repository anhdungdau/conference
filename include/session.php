<?php 
	include('../registration/functions.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../registration/login.php');
	}
?>