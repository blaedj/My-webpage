<html>
<head>

	<title>Retrive data from the database</title></head>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="box">
<?php

//connect to the server
mysql_connect("localhost", "root", "") or die(mysql_error());

//select database
mysql_select_db("mydatabase") or die(mysql_error());

//SQL query
$strSQL = "SELECT * FROM people ORDER BY FirstName DESC";

//execute the query
$result = mysql_query($strSQL);

while ($row = mysql_fetch_array($result)) {
	//name of the person
	$strName = $row['FirstName'] . " " . $row['LastName'];
	
	//create linkto person.php with the person's id-value in the url
	$strLink = " <a href='person.php?id=" . $row['id'] . "'>" . $row['FirstName'] ."</a>";
	//list the link
	echo "<li>" . $strLink . "</li>";

	}

mysql_close();
?>
<br />
<a href="testingpage.html">Done Viewing List</a><br />
<a href="dataform.html">Add someone to the list</a>
</div>
</body>
</html>