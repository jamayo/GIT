<!DOCTYPE html>
<!--
Ejercicio 10
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo.

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
          $cantidad = $_REQUEST['cantidad'];
          if (!is_numeric($numero)){ //empty evalua un valor 0 como empty = true, por tanto no me sirve en este caso.
            echo "No has introducido un numero";
          } else if ($numero < 0){ 
            echo '<span> La media de los numero introducidos es: ' .($suma / $cantidad) . '<br';
          } else {
              $cantidad++;
              $suma += $numero;
          }
        }
        if ($numero >= 0){
        ?>
          <fieldset>
            <legend>Calculo de la media numeros</legend>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
              <!--<form action="Ej13listaNumeros.php" method="post"> -->
              <input type="text" name="numero" autofocus>
                <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>">  
                <input type="hidden" name="suma" value="<?php echo $suma ?>">          
                <input type="submit" value="Continuar">   <!--*OJITO, PONER AQUI EL ECHO**-->
              </form>
          </fieldset>
        <?php 
        }
        ?>
    </div>
  </body>
</html>
