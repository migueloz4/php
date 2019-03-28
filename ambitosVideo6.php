<!DOCTYPE html>
<html>
<head>
	<title>Ambitos de variables</title>
</head>
<body>
	<?php
	echo "ambitos de variables<br>";
	//Local: declarada en la function, vive solo dentrode ella
	//Global: se puede usar en todo el codigo y se declara en cualquier parte de el
	//Super Global: Declarada como array y accesible desde fuera del script PHP
	
	$nombre="Juan"; //VARIABLE GLOBAL

	/*
	function DameNombre() {
		$nombre="Maria"; //VARIABLE LOCAL, SOLO VIVE DENTRO DE LA FUNCION
	}
	
	DameNombre();
	*/
	include("ambitosvideo6prueba.php"); //al hacer tampoco se sobreescribe sobre la GLOBAL (juan)
	DameNombre(); 
	echo$nombre; //SE VA A IMPRIMIR LA VARIABLE GLOBAL, JUAN

	?>
</body>
</html>