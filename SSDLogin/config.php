<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("40733764996-abssjsvar00sm7a8ekmdo6kp33u36pl9.apps.googleusercontent.com");
	$gClient->setClientSecret("pr_rGe_J6EFTCosYnDA5PCGK");
	$gClient->setApplicationName("SSD Login");
	$gClient->setRedirectUri("http://localhost/SSDLogin/google-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
