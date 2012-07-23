<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box">

<?php

mysql_connect("localhost", "root", "") or die(mysql_error());
//mysql_query("CREATE DATABASE mydatabase") or die(mysql_error());



mysql_select_db("mydatabase") or die(mysql_error());

mysql_query("DROP TABLE people") or die(mysql_error());

mysql_query("CREATE TABLE people(
	id int AUTO_INCREMENT,
	FirstName varchar(30),
	LastName varchar(30),
	email varchar(40),
	PRIMARY key(id)
	)") or die(mysql_error());
mysql_close();
?>

<a href="testingpage.html">Return to the links page</a>
</div>
</body>
</html>