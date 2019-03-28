<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include("POOII.php");

	//creo instancias
	$renault=new Coche(); // Coche() es el constructor
	$ferrari=new Camion();

	echo $renault->ruedas . "ruedas de coche <br>";
	echo $ferrari->ruedas . "ruedas de camion <br>";

?>

</body>
</html>