<?php 
	include('../registration/functions.php');
	if (!isAdmin()) {
		$_SESSION['msg'] = "You must login your admin account";
		header('location: ../registration/login.php');
	}
?>