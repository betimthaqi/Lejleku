<?php
	require_once "php/configgm.php";
	unset($_SESSION['access_token']);
	$accesstoken=$_SESSION['access_token'];
	$gClient->revokeToken($accesstoken);
	session_destroy();
	header('Location: index.php');
	exit();
?>
