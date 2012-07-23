<html>
<head><title>This is my text writing test page</title></head>


<body>

<?php
//open the text file
$f = fopen("lorem.txt", "a");

$strText = $_POST["textblock"];

//write text
fwrite($f, $strText);
fclose($f);

$f=fopen("lorem.txt", "r");

echo "<h3>Contents of the file: </h3>" . fgets($f);


fclose($f);

?>




</body>


</html>