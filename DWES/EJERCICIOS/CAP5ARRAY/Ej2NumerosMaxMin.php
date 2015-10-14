<!DOCTYPE html>
<!--
Ejercicio 2
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php
  $cantidadNumeros = 10; //cuantos numeros voy a pedir
  $contadorNumeros = $_POST['contadorNumeros'];
  $minimo = $_POST['minimo'];
  $maximo = $_POST['maximo'];
  $arrayNumeros = unserialize(base64_decode($_POST['arrayNumeros']));
  if ($_SERVER["REQUEST_METHOD"] == "POST") {  //compruebo exista post
  // tambien puedo poner if($_POST)
    //echo "recibo un post";
    $iniciado = true;
    if (is_numeric($_POST['numero'])){
      $numero = test_input($_POST['numero']);  //testedo datos introducidos
      $arrayNumeros[$contadorNumeros] = $numero;
      $contadorNumeros++;  //incremento  contador numeros introducidos
      if ($contadorNumeros == $cantidadNumeros) { 
        foreach($arrayNumeros as $num){
          if ($num < $minimo){
            $minimo = $num;
          }
          if ($num > $maximo){
            $maximo = $num;
          }
        }
        echo "Los números introducidos son: ";
        foreach($arrayNumeros as $num){
          echo $num;
          if ($num == $minimo){
            echo "(mínimo) ";
          } else if ($num == $maximo){
            echo "(máximo) ";
          }
          echo ", ";
        }
      }
    }
  }   
  if (!$iniciado) {
    $contadorNumeros = 0;
    $maximo = (-1 * PHP_INT_MAX);
    $minimo = PHP_INT_MAX;
    $num;
    //echo "iniciado";
  }
  if ($contadorNumeros < $cantidadNumeros){
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      Introduzca un número:
      <input type="text" name ="numero" autofocus>
      <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros ?>">
      <input type="hidden" name="arrayNumeros" value="<?= print base64_encode(serialize($arrayNumeros)) ?>">
      <input type="hidden" name="minimo" value="<?= $minimo ?>">
      <input type="hidden" name="maximo" value="<?= $maximo ?>">
      <input type="submit" value="OK">
    </form>
    <p>Has introducido <?= $contadorNumeros ?> numeros</p>
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
