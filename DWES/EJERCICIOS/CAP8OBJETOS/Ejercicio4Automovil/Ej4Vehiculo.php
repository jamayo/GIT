<!DOCTYPE html>
<!--
Ejercicio 4
Crea la clase Vehiculo, así como las clases Bicicleta y Coche como subclases de la primera. Para la
clase Vehiculo, crea los métodos de clase getVehiculosCreados() y getKmTotales(); así como el
método de instancia getKmRecorridos(). Crea también algún método específico para cada una de
las subclases. Prueba las clases creadas mediante una aplicación que realice, al menos, las siguientes
acciones:
• Anda con la bicicleta
• Haz el caballito con la bicicleta
• Anda con el coche
• Quema rueda con el coche
• Ver kilometraje de la bicicleta
• Ver kilometraje del coche
• Ver kilometraje total
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
   <!DOCTYPE html>
<?php
  include_once 'Vehiculo.php'; // no es necesario incluirla
  include_once 'Bicicleta.php';
  include_once 'Coche.php';
  $miBici = new Bicicleta("Orbea", "Tech45", "21", "carreras");
  $miCoche = new Coche("Ford", "Mondeo", "5", "gasoil");

  echo "$miBici<hr>";
  echo "$miCoche<hr>";
  
  echo $miBici->anda(15);
  echo $miBici->anda(35);
  echo $miBici->haceCaballito();
  echo $miCoche->anda(20);
  echo $miCoche->anda(10);
  echo $miCoche->quemaRueda();
  echo "kilometros recorridos en mi bici: " . $miBici->getKmRecorridos() . "<br>";
  echo "kilometros recorridos en mi coche: " .$miCoche->getKmRecorridos() . "<br>";
  echo "kilometros totales recorridos: " . Vehiculo::getKmTotales(). "<br>";
?>
</body>

</html>
