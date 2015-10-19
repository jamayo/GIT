<!DOCTYPE html>
<!--
Ejercicio 3
Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.

V1. uso un foreach, con la precaucion de introducir como primer valor (indice 0) en el segundo array
el ultimo valor del primer array, despues solo tengo que ir introduciendo valores que extraigo con 
el foreach del primer array al segundo. por ultimo, como el foreach me ha copiado todos los valores, tengo
la precaucion de borrar el ultimo valor copiado en el segundo array (que ya tenia posicionado en el indice 0.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php
  $cantidadNumeros = 15; //cuantos numeros voy a pedir
  $contadorNumeros = $_POST['contadorNumeros'];
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
        $arrayDesplazados[] = $arrayNumeros[$cantidadNumeros - 1];
        foreach($arrayNumeros as $num){
          $arrayDesplazados[] = $num;
        }
        $arrayDesplazados[$cantidadNumeros] = "";
        echo "Los números introducidos son: ";
        foreach($arrayNumeros as $num){
          echo $num . ", ";
        }
        echo "<BR>Los números desplazados son: ";
        foreach($arrayDesplazados as $num){
          echo $num . ", ";
        }
      }
    }
  }   
  if (!$iniciado) {
    $contadorNumeros = 0;
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
