<style>
  .resultado{
    color:#F00;
    font-weight:bold;
    font-size: 32px;
  }
</style>



<?php
  //ISSET verfica si se apreto el boton
  //_POST es una variable super global
  //Si se apreta el button, se ejecuta lo que esta adentro del if
  if(isset($_POST["button"])) {
      $numero1=$_POST["num1"]; // _POST genera un array, y adentro de los corchetes va el valor del ID
      $numero2=$_POST["num2"];
      $operacion=$_POST["operacion"];
      Calcular($operacion, $numero1, $numero2); //invoco a la funcion y le paso como parametro $OPERACION
  }    
      
  function Calcular($operacion, $numero1, $numero2) {
      
      if(!strcmp("Suma", $operacion)) {
        $resultado=$numero1+$numero2;
        echo "<p class='resultado'>  el resultado de la suma es: $resultado </p>" ;
      }
      //otra forma de hacerlo
      if($operacion=="Resta") {
        echo "el resultado de la resta es: " . ($numero1-$numero2);
      }
      if($operacion=="Multiplicación") {
        echo "el resultado de la multiplicacion es: " . ($numero1*$numero2);
      }
      if($operacion=="División") {
        echo "el resultado de la division es: " . ($numero1/$numero2);
      }
      if($operacion=="Módulo") {
        echo "el resultado de la modulo es: " . ($numero1%$numero2);
      }
      if($operacion=="Incremento") {
        $numero1++;
        echo "el resultado del incremento es: " . $numero1;
      }
      if($operacion=="Decremento") {
        $numero1--;
        echo "el resultado del decremento es: " . $numero1;
      }
  }
?>
