<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	//pasando parametros por VALOR
	$var1=1;
	function CambiaValor($variable) {
		return $variable=3;
	}

	echo "usando funcion: " . CambiaValor($var1);
	echo "<br>var1 sigue teniendo el mismo valor: " . $var1;

	//pasando valor por REFERENCIA, CUANDO SE USA EL AMPERSAND &

	function CambiaValor2(&$variable2) {
		return $variable2=4;
	}

	echo "<br>usando funcion: " . CambiaValor2($var1);
	echo "<br>var1 cambio el valor por el & : " . $var1;
?>

</body>
</html>