<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
	
	if(isset($_POST["enviando"])) { //el boton del form tiene NAME=enviando

		$edad=$_POST["edad_usuario"];
		$nombre=$_POST["nombre_usuario"]; //el metodo por el que manda el HTML es POST, nombre_usuario es el NAME, y eso lo guardo en mi var $nombre
		/*
		if($edad>0 and$edad<=18){
			echo "eres menor de edad";
		}
		if($edad<=40){
			echo "eres joven";
		} 
		else if($edad<=65){
			echo "eres maduro";
		}
		else{
			echo "cuidate";
		}
		*/
	}

	//ejemplo de OPERADOR TERNARIO
	// ? SI TRUE
	// : NO FALSE
	//echo $edad<18 ? "Eres menor de edad" : "Puedes acceder";
	
	//otra forma de hacerlo 
	$resultado= $nombre=="Juan"&& $edad=="23" ? "correcto" : "incorrecto";
	echo $resultado;
?>