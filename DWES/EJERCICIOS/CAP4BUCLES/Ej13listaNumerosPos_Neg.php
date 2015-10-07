<!DOCTYPE html>
<!--
Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos
son negativos.

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
          $positivo = $_REQUEST['positivo'];
          if (!is_numeric($numero)){ //empty evalua un valor 0 como empty = true, por tanto no me sirve en este caso.
            echo "No has introducido un numero";
          } else if ($numero < 0){ 
              $cantidad++;
              $suma += $numero;
          } else {
              $positivo++;
              $cantidad++;
              $suma += $numero;
          }
        }
        if ($cantidad < 10){
        ?>
          <fieldset>
            <legend>Calculo de la media numeros</legend>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
              <!--<form action="Ej13listaNumeros.php" method="post"> -->
              <input type="text" name="numero" autofocus>
                <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>">  
                <input type="hidden" name="suma" value="<?php echo $suma ?>">          
                <input type="hidden" name="positivo" value="<?php echo $positivo ?>">
                <input type="submit" value="Continuar">   <!--*OJITO, PONER AQUI EL ECHO**-->
              </form>
          </fieldset>
        <?php 
        }else {
          echo '<span> Has introducido ' . $positivo . ' numeros positivos </span><br>';
          echo '<span> Has introducido ' . ($cantidad - $positivo) . ' numeros negativos </span><br>';
          echo '<span> La media de los numero introducidos es: ' .($suma / $cantidad) . '<br';
        }
        ?>
    </div>
  </body>
</html>
