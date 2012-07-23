<html>
<head>
	<title>Submited data</title>
</head>
<body>


<?php

mysql_connect("localhost", "root", "") or die(mysql_error());

mysql_select_db("mydatabase") or die(mysql_error());

$first = $_POST["firstname"];
$last = $_POST["lastname"];
$em = $_POST["email"];


$strSQL = "INSERT INTO people(FirstName, LastName, email) ";

$strSQL = $strSQL . "VALUES('$first', '$last', '$em')";

/**$strSQL = $strSQL . "$first";
$strSQL = $strSQL . "$last";
$strSQL = $strSQL . "$em";*/

mysql_query($strSQL) or die(mysql_error());

mysql_close();
?>

<a href="testingpage.html">Back to link page</a>
</body>
</html>