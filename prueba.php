<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
print "introduccion a funciones en php:<br>";

function dameDatos() {
	echo "Aca vamos a ver manejo de flujo, INCLUDE y REQUIRE<br>";
}

dameDatos(); //aca invoco a la funcion, se puede hacer antes o desp de la fun

include("probandoinclude.php"); //si el archivo no existe, el flujo de ejecucion sigue adelante.
//si uso el REQUIRE, se corta ahi, y no ejecuta mas
//ENTONCES INCLUDE ES MAS FLEXIBLE
//REQUIRE requiere el archivo para poder seguir ejecutando
probando();

echo "SE EJECUTA IGUAL CON INCLUDE";


?>

</body>
</html>