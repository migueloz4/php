<?php
	//ESTE ARCHIVO CONTIENE CLASE COCHE Y CLASE CAMION
	//creo una clase
	class Coche {
		//ahora asigno atributos(propiedades) a una clase
		var $ruedas;
		var $color;
		var $motor;

		//El constructor de una clase indica el estado inicial de la clase, y tiene el mismo nombre que ella
		
		function Coche(){ //metodo constructor
			$this->ruedas=4;
			$this->color="";
			$this->motor=1600;
		}

		//aca termina el constructor

		//una funcion dentro de una clase es un METODO
		function Arrancar() {
			echo "Estoy arrancando <br>";
		}
		function Girar() {
			echo "Estoy girando<br>";
		}
		function Frenar() {
			echo "Estoy frenando<br>";
		}
		function EstablecerColor($color_coche, $nombre_coche) {
			$this->color=$color_coche;
			echo "El color de este coche " . $nombre_coche . " es: " .  $this->color . "<br>";
		}
	}
	//---------------------------

	class Camion {
		//ahora asigno atributos(propiedades) a una clase
		var $ruedas;
		var $color;
		var $motor;

		//El constructor de una clase indica el estado inicial de la clase, y tiene el mismo nombre que ella
		
		function Camion(){ //metodo constructor
			$this->ruedas=8;
			$this->color="";
			$this->motor=2600;
		}

		//aca termina el constructor

		//una funcion dentro de una clase es un METODO
		function Arrancar() {
			echo "Estoy arrancando <br>";
		}
		function Girar() {
			echo "Estoy girando<br>";
		}
		function Frenar() {
			echo "Estoy frenando<br>";
		}
		function EstablecerColor($color_coche, $nombre_coche) {
			$this->color=$color_coche;
			echo "El color de este coche " . $nombre_coche . " es: " .  $this->color . "<br>";
		}
	}

?>	
