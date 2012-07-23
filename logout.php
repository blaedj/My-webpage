<html>
<head>
	<title>LOGOUT</title>
</head>
<body>
<?php
$code = $_GET["id"];
if ($code == '899576q3e') {
	# code...
	session_destroy();
}
echo "<h1>You are now logged out</h1>";
echo "<a href=homepage.html>HOME</a>";
?>



</body>
</html>