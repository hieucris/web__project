<?php 
	require_once "login_config.php";
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}
?>