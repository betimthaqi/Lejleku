<?php
	require_once "php/configgm.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
	header('Location: index.php');
	exit();
?>
