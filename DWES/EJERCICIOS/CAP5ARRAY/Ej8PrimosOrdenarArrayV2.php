<!DOCTYPE html>
<!--
Ejercicio 8
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
el array resultante..

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
        $posicionPrimo = 0;
        $posicionNoPrimo = count($arrayNumeros)-1;
        $primo;
        for ($c =(count($arrayNumeros)-1); $c >= 0; $c--){
          
          $num = $arrayNumeros[$c];
          if ($num > 1){
              for ( $i = 2; $i < $num; $i++) {
                if ($num%$i == 0) {
                  $arrayOrdenado[$posicionNoPrimo] = $num;
                  $posicionNoPrimo--;
                  $i = $num;
                } 
              }
          } else {
            $arrayOrdenado[$posicionNoPrimo] = $num;
            $posicionNoPrimo--;
          }
        }
        for ($c = 0; $c < count($arrayNumeros); $c++){
          $num = $arrayNumeros[$c];
          if ($num > 1){
              $primo = true;
              for ( $i = 2; $i < $num; $i++) {
                if ($num%$i == 0) {
                  $i = $num;
                  $primo = false;
                } 
              }
              if ($primo == true){
                $arrayOrdenado[$posicionPrimo] = $num;
                $posicionPrimo++;
              }
          } 
        }
?>
    <table border="1">
      <tr>
        <th>Array inicial</th>
        <th>Indice</th>
        <th>Array ordenado</th>
        <th>Indice</th>
      </tr>
<?php
        for ($i = 0; $i < count($arrayOrdenado); $i++){
?>
      <tr>
        <td align="center"><?= $arrayNumeros[$i] ?></td>
        <td align="center"><?= $i ?></td>
        <td align="center"><?= $arrayOrdenado[$i] ?></td>
        <td align="center"><?= $i ?></td>
      </tr>
<?php 
        }
?>
    </table>
<?php
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
