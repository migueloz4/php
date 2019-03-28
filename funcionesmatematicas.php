<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php	
	$num1=rand(); //rand (1, 9) genera un numero aleatorio entre ese intervalo, sin incluirlos
	echo "El numero aleatorio es: " . $num1 . "<br>";

	$num2=pow(5,2);
	echo "5 al cuadrado es: " . $num2 . "<br>";

	$num3=5.25;
	echo "El numero redondeado a un entero es: " . round($num3) . "<br>"; //redondea a un entero

	//para redondear a dos elementos por ejemplo 
	echo "El numero redondeado a dos decimales: " . round($num3, 2) . "<br>";

	//CASTING: cambiar de un valor a otro 
	//ej de casting explicito
	$num4="5"; //string;
	$resultado=(int)$num4; //acá estoy convirtiendo num4 de un string a un int
	echo "resultado: " . $resultado;

?>
</body>
</html>