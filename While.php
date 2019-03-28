<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$var1=1;
	while($var1<6) {
		echo $var1++ . "ejecutando while <br>";
	}
	echo "ya sali del while<br>";
	
	$var2=0;

	do {
		echo $var2++ . "estoy en el DO while<br>";
	}while ($var2<3);
	echo "ya sali del do while";
?>
</body>
</html>
