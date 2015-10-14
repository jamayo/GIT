<!DOCTYPE html>
<!--
Ejercicio 7
Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
si es necesario.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php
  $cantidadNumeros = 20; //cuantos numeros voy a pedir
  $rangoinferior = 0;
  $rangosuperior = 100;
  $arrayNumeros = unserialize(base64_decode($_POST['arrayNumeros']));
  if ($_SERVER["REQUEST_METHOD"] == "POST") {  //HA HABIDO POST
    $posicionPar = 0;
    $posicionImpar = count($arrayNumeros);
    foreach ($arrayNumeros as $num){  //muestro los valores del array con espacios
      if ($num%2 == 0) {
        $arrayOrdenado[$posicionPar] = $num;
        $posicionPar++;
      } else {
        $posicionImpar--;
        $arrayOrdenado[$posicionImpar] = $num;
      }
    }
    echo "El array aleatorio generado es: ";
    foreach ($arrayNumeros as $num){  //muestro los valores del array con espacios
      echo $num . " ";
    }
    echo "<br><br>";
    echo "El array ordenado generado es: ";
    for ($i = 0; $i < count($arrayOrdenado); $i++){  //muestro los valores del array con espacios
      echo $arrayOrdenado[$i] . " ";
    }
    echo "<br><br>";
  } else { //NO HA HABIDO POST
    
    for ($i = 0; $i < $cantidadNumeros; $i++){ //creamos array con numeros aleatorios
      $arrayNumeros[$i] = rand($rangoinferior, $rangosuperior);
    }
    echo "El array aleatorio generado es: <br>";
    foreach ($arrayNumeros as $num){  //muestro los valores del array con espacios
      echo $num . " ";
    }
    echo "<br><br>";
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="hidden" name="arrayNumeros" value="<?= print base64_encode(serialize($arrayNumeros)) ?>">
      <input type="submit" value="Ordena array">
    </form>
<?php   
  }
    function test_input($data) {
      $data = trim($data);  //quito espacios en blanco delanteros y traseros
      $data = stripcslashes($data); //quito slash
      $data = htmlspecialchars($data);  //convierto < > en &lt y &lg, evito script malicioso
      return $data;
    }
?> 
  </body>
</html>
