<html>
<head>
	<title>LoginPage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box">
<?php
//check to see if username and password are correct
if ($_POST["username"] == "anecdotal" && $_POST["password"] == "php") {
	//if correct set session to YES
	session_start();
	$_SESSION["Login"] = "YES";
	//setcookie("loginmark", time(60));
	echo "<h1>You are now logged in</h1>";
	echo "<p><a href='testingpage.html'>Link to testing page</a></p>";
}

elseif ($_POST["username"] != "anecdotal") {
	# code...

	//if not correct we set session to "NO"
	$_SESSION["Login"] = "NO";
	echo "<p>Username not recognized</p>";
	echo "<a href='login.html'>Try again</a>";
}

else{
	//password is incorrect
	$_SESSION["Login"] = "NO";
	echo "<p>incorrect password</p>";
	echo "<a href='login.html'>Try again</a>";
}

?>
</div>
</body>
</html>