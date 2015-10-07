<!DOCTYPE html>
<!--
Ejercicio 23
Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la
suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <div id="contenedor">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $numero = $_REQUEST['numero'];
          $suma = $_REQUEST['suma'];
          $contador = $_REQUEST['contador'];
          $positivo = $_REQUEST['positivo'];
          $par = $_REQUEST['par'];
          $noPrimo = $_REQUEST['noPrimo'];
          if (!is_numeric($numero)){ //empty evalua un valor 0 como empty = true, por tanto no me sirve en este caso.
            echo "No has introducido un numero";
          } else {
            $contador++;  //incremento contador $numero introducido
            $suma += $numero;
            if ($numero%2 == 0) { //compruebo $numero es par
              $par++;
            } 
            if ($numero >= 0) { //compruebo $numero positivo
              $positivo++;
            }
            if ($numero > 1){ //compruebo $numero NO primo
              for ( $i = 2; $i < $numero; $i++) {
                if ($numero%$i == 0) {
                  $noPrimo++;
                  $i = $numero;
                } 
              }
            }
          }
        }
        if ($suma < 10000){  //si la $suma es menor a 10000, continúo pidiendo $numero
        ?>
          <fieldset>
            <legend>Calculo de la media numeros</legend>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
              <!--<form action="Ej13listaNumeros.php" method="post"> -->
              <input type="text" name="numero" autofocus>
                <input type="hidden" name="contador" value="<?php echo $contador ?>">  
                <input type="hidden" name="suma" value="<?php echo $suma ?>">          
                <input type="hidden" name="positivo" value="<?php echo $positivo ?>">
                <input type="hidden" name="par" value="<?php echo $par ?>">
                <input type="hidden" name="noPrimo" value="<?php echo $noPrimo ?>">
                <input type="submit" value="Continuar">   <!--*OJITO, PONER AQUI EL ECHO**-->
              </form>
          </fieldset>
        <?php 
        }else {  //si la $suma es mayor o igual a 10000 muestro resultado
          echo '<span> Has introducido ' . $positivo . ' numeros positivos y ' .
                      $resultado = ((($contador - $positivo)>= 0 )?($contador - $positivo):'0') . ' numeros negativos </span><br>';
          echo '<span> Has introducido ' . $resultado = ((($contador - $noPrimo)>= 0 )?($contador - $noPrimo):'0') . ' numeros primos y ' .
                       $noPrimo . ' numeros No primos </span><br>'; 
          echo '<span> Has introducido ' . $par . ' numeros pares y ' .
                      $resultado = ((($contador - $par)>= 0 )?($contador - $par):'0') . ' numeros impares </span><br>';
          echo '<span> Has introducido un total de ' . $contador . ' numeros y su media es: ' .($suma / $contador) . '<br';
        }
        ?>
    </div>
  </body>
</html>
