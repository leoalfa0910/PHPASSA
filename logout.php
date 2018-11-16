<?php 
	include_once 'autoload.php';
	$auth->logout();
	exit(header('Location: ' . APP_URL));