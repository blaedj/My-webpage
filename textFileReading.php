<html>
<head>
<title>Test File reading</title>
</head>

<body>
	<h1>Link Directory</h1>
<?php

//open the text file
$f = fopen("Lorem.txt", "r");

while (!feof($f)) {

//make an array using explode on the text file, comma is delimiter
$arrM=explode(",", fgets($f));

//Write the links (get the data in the array)
echo "<li><a href='http://" . $arrM[1] . "'>" . $arrM["0"]. "</a></li>";
}

fclose($f);
?>
</body>


</html>