<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("519884771442-23u1ddmc3labjbis0ttlceptp32paaq1.apps.googleusercontent.com");
	$gClient->setClientSecret("CZrGOe28jwV1WvjGDxiKwEeg");
	$gClient->setApplicationName("php-master2");
	$gClient->setRedirectUri("http://localhost/php-master2/g-callbackgm.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
