<!DOCTYPE html>
<!--
Realiza un programa que pida 8 números por teclado y que los almacene en un array. A continuación se debe
mostrar el contenido de ese array junto al índice (0 – 7). Seguidamente el programa debe colocar de forma alterna y
en orden los primos y los no primos: primero primo, luego no primo, luego primo, luego no primo… Cuando se acaben
los primos o los no primos, se completará con los números que queden.

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
        $cantidadPrimos = primo($arrayOrdenado);
        //echo $cantidadPrimos;
      
      
      //ORDENO EN ARRAY DEFINITIVO
      
      for($i = 0, $j = count($arrayOrdenado) -1; $i < count($arrayOrdenado)/2; $i++, $j--){
        $arrayDefinitivo [] = $arrayOrdenado[$i];
        $arrayDefinitivo [] = $arrayOrdenado[$j]; 
      }

?>
    <table border="1">
      <tr>
        <th>Array inicial</th>
        <th>Indice</th>
        <th>Array ordenado</th>
        <th>Indice</th>
        <th>ARRAY PEDIDO EJERCICIO</th>
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
        <td align="center"><?= $arrayDefinitivo[$i] ?></td>
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
  //FUNCION PRIMO == DEVUELVE BOOLEANO
      function primo($data) {
        
        foreach($data as $n){
         if ($n > 1){
              $primos = true;
              for ( $i = 2; $i < count($data); $i++) {
                if ($n%$i == 0) {
                  //return false;
                  $i = count($data);
                  $primos = false;
                }
                
              }
              if ($primos == true){
                $contadorPrimo++;
              }
          }
        }
        return $contadorPrimo;
      }
    //===FIN FUNCION PRIMO
  
?>
  </body>
</html>
