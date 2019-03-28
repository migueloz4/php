<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	//print y echo imprimen en pantalla
	print "bienvenidos al curso de PHP<br>"; //<br> es para salto de linea	
	print "como estan?<br>";
	//practico variables
	$nombre="Juan"; //juan es un string, se puede poner entre "" o ''
	$edad=18;
	print "la variable nombre es: " . $nombre;//el punto se usa para concatenar, con un espacio delante y detras
	print "<br>La variable edad es: " . $edad; 
	//es mejor ponerlo asi
	print "<br>la variable nombre es: $nombre <br>"; //si lo pongo entre '' NO funciona.

	//print no admite imprimir variables sin string, echo si, print es funcion,
	//echo es una expresion
	//ejemplo
	//print $nombre, $edad;
	echo $nombre, $edad;
	// EN GENERAL HAY QUE USAR ECHO
?>

</body>
</html>