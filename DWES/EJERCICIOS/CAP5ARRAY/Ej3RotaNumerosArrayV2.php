<!DOCTYPE html>
<!--
Ejercicio 3
Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.

V2. tranfiero los valores directamente al array desplazado con un bucle for con dos contadores indices.
    con cuidado de primero traspassar el ultimo valor del primer array al primer del segundo array, por que 
si bien respeta el indice, a la hora de mostrarlo, un foreach lo muestra tal y como fue introducido, no por
orden de indice (para solucionar esto deberia haberlo hecho con un for normal con su variable que use de indice.

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
        $arrayDesplazados[0] = $arrayNumeros[$contadorNumeros - 1]; //para que con un foreach me lo muestre el primero.. ver mi explicacion pag 33
        for($i = 0, $j = 1; $j < $cantidadNumeros; $i++, $j++) {
          $arrayDesplazados[$j] = $arrayNumeros[$i];
        }
        echo "Los números introducidos son: ";
        foreach($arrayNumeros as $num){
          echo $num . ", ";
        }
        echo "Los números desplazados son: ";
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
