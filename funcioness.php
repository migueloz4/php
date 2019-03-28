<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	//strtolower convierte una cadena string a MINUSCULAS
	$nombre=strtolower("MIGUEL");
	echo "Usando strtolower: " . $nombre . "<br>" ; 

	//strtoupper convierte una cadena a MAYUSCULAS
	$nombre2=strtoupper("juan");
	echo "Usando strtoupper: " . $nombre2;

	function Suma($num1, $num2) {
		return $resultado=$num1+$num2;
	}
	$num1=1;
	$num2=2;
	$resultado=Suma($num1, $num2);
	echo $resultado;

	//ahora hago otra funcion

	
?>

</body>
</html>