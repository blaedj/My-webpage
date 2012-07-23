
<?php

$strUsername = $_POST["username"];

if ($strUsername != "") {
	$strHeading = "<h1>Hello " . $_POST["username"] . "</h1>";
	}
else{
	$strHeading = "<h1>Hello Stranger!</h1>";
}

$favcolor = $_POST["favcolor"];

if ($favcolor) {

	switch ($favcolor)
	{
		case "r":
			$strBackgroundColor = "rgb(255,0,0)";
			break;
		case "g":
			$strBackgroundColor = "rgb(0,255,0)";
			break;
		case "b":
			$strBackgroundColor = "rgb(0,0,255)";
			break;
		default:
			$strBackgroundColor = "rgb(255,255,255)";
			break;
	}
}

?>
<html>

<head>
<title>Form handler</title>
</head>

<body style="background: <? echo $strBackgroundColor; ?>;">
	<? echo $strHeading; ?>


</body>

</html>