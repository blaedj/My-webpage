<?php 
	session_start();
	if ($_SESSION["Login"] != "YES") {
		$URL = "login.html";
	}

	else{
		$URL = "testingpage.html";
	}
	
	header("Location: $URL");

	?>
