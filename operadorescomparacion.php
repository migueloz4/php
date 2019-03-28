<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$variable1=8; //TIPO ENTERO
	 
	$variable2="8"; //TIPO STRING
	
	$variable3="Juan"; //TIPO STRING

	if($variable1==$variable2){ 
		echo "son iguales<br>";
	}
	else {
		echo "no son iguales";
	}

	//si comparo variable 1 con variable 3
	if($variable1==$variable3){ 
		echo "son iguales";
	}
	else {
		echo "no son iguales<br>";
	}

	//si uso tres iguales ===, ademas de ver si son iguales comparo si el TIPO es igual.

	if($variable1===$variable2){ 
		echo "son iguales";
	}
	else {
		echo "no son iguales<br>";
	}

	if($variable1!=$variable2){ 
		echo "son diferentes";
	}
	else {
		echo "son iguales";
	}
?>
</body>
</html>