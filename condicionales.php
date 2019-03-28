<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	
	$var1=true;
	$var2=false;

	//PRIORIDAD: &&, =, AND
	$resultado=$var1 && $var2; //resultado=false, && tiene mas prioridad que el = 

	if($resultado==true){
		echo "el resultado 1 es true";
	}
	else{
		echo "el resultado 1 es false " . "<br>";
	}

	//Diferente es si uso AND
	$resultado2=$var1 and $var2;

	if($resultado2==true){
		echo "el resultado 2 es true" . "<br>";
	}
	else{
		echo "el resultado 2 es false";
	}
?>
</body>
</html>