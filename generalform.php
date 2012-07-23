<html>
<head>
	<title>Retreive Data form</title>
</head>
<body>
<h1>Retreive data</h1>

<?php
//connect to server
mysql_connect("localhost", "root", "") or die(mysql_error());

//select database
mysql_select_db("mydatabase") or die(mysql_error());

//create SQL Query from form
$strSQLq = $_POST["SQLstring"];

mysql_query($strSQLq) or die(mysql_error());

mysql_close();
?>
</body>
</html>