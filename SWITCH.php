<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php	
	$nombre="Miguel";

	switch($nombre) {
		case "Juan": 
			echo "usuario autorizado Juan";
			break;
		case "Miguel":	
			echo "usuario autorizado Miguel";
			break;
		case "Maria":
			echo "usuario autorizado Maria";	
			break;
		default:
			echo "usuario no autorizado";				
	}
?>
</body>
</html>