<html>
<head>
	<title>person page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="box">
<?php
//open connection to database
mysql_connect("localhost", "root", "") or die(mysql_error());
//select database
mysql_select_db("mydatabase") or die(mysql_error());
//get data from database depending on id value passed in from url
$strSQL = "SELECT * FROM people WHERE id=" . $_GET["id"];
$rs = mysql_query($strSQL);

while ($row = mysql_fetch_array($rs)) {
	//write the name and email of the person
	echo "<dt>Name:</dt><dd>" . $row["FirstName"] . " " . $row["LastName"] . "</dd>";
	echo "<dt>Email:</dt><dd>" . $row["email"] . "</dd>";
}

//close the connection
mysql_close();

?>

<a href="display.php">return to the list page</a>
</div>
</body>
</html>