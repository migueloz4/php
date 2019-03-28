<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//STRCMP compara dos strings teniendo en cuenta mayusculas y minusculas
		//STRCASECMP compara sin tener en cuenta mayusculas y minusculas
		$variable1="Casa"
		$variable2="CASA";

		$resultado=strcmp($variable1,$variable2); //devuelve 1 si son iguales (true) y 0 si no lo son (false)
		echo "el resultado de comparacion de string con STRCMP es:" . $resultado . "<br>";

		$resultado2=strcasecmp($variable1, $variable2);
		echo "el resultado de comparacion de string con STRCASECMP es: " . $resultado2;

	?>
</body>
</html>