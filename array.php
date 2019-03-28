<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$array=array("miguel", "lucas", "martin");

	//FOR ASCENDENTE
	for($i=0; $i<3; $i++) {
		echo $array[$i] . "<br>";
	}

	//FOR DESCENDENTE
	for($i=2; $i>=0; $i--){ 
		echo $array[$i] . "<br>";
	}
?>
</body>
</html>