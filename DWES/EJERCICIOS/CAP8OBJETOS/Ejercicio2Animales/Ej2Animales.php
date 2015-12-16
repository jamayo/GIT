<!DOCTYPE html>
<!--
Ejercicio 2
Crea las clases Animal, Mamifero, Ave, Gato, Perro, Canario, Pinguino y Lagarto. Crea, al menos,
tres métodos específicos de cada clase y redefine el/los método/s cuando sea necesario. Prueba las
clases en un programa en el que se instancien objetos y se les apliquen métodos. Puedes aprovechar
las capacidades que proporciona HTML y CSS para incluir imágenes, sonidos, animaciones, etc.
para representar acciones de objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
   <!DOCTYPE html>
<?php
  include_once 'Animal.php'; // no es necesario incluirla
  include_once 'Mamifero.php';
  include_once 'Ave.php';
  include_once 'Gato.php';
  include_once 'Perro.php';
  include_once 'Canario.php';
  include_once 'Pinguino.php';
  include_once 'Lagarto.php';
  
  
  $miCanario = new Canario("Piolin", "macho", 100, 2, "pequeña", "Criadero de Logroño");
  $miGato = new Gato("Misifú", "hembra", 8000, 3, 4, "persa");
  $miPerro = new Perro("Toby", "macho", 15000, 2, 5, "Friskas");
  $miLagarto = new Lagarto("Juancho", "macho", 800, 2, "Lagartus Famosus");
  $miPinguino = new Pinguino("Tux", "hembra", 12000, 15, "Plamifera", "Emperador");
  
  

  echo "<br>Mi canario se llama ". $miCanario->getNombre() . " y su sexo es ". $miCanario->getSexo();
  echo "<br>Mi gato se llama ". $miGato->getNombre() . " y su sexo es " .$miGato->getSexo();
  echo "<br>Mi lagarto se llama ". $miLagarto->getNombre() . " y es de la especie " . $miLagarto->getEspecie();
  echo $miCanario->vuela();
  echo $miPinguino->nada();
  echo $miGato->maulla();
  echo $miPerro->ladra();
  
  
  
  //echo "$miBici<hr>";
  //echo "$miCoche<hr>";
 /* 
  echo $miBici->anda(15);
  echo $miBici->anda(35);
  echo $miBici->haceCaballito();
  echo $miCoche->anda(20);
  echo $miCoche->anda(10);
  echo $miCoche->quemaRueda();
  echo "kilometros recorridos en mi bici: " . $miBici->getKmRecorridos() . "<br>";
  echo "kilometros recorridos en mi coche: " .$miCoche->getKmRecorridos() . "<br>";
  echo "kilometros totales recorridos: " . Vehiculo::getKmTotales(). "<br>";
  
  */
?>
</body>

</html>
