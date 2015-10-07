<!DOCTYPE html>
<!--
Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
primo es aquel que sólo es divisible entre él mismo y la unidad.

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
          if (!is_numeric($numero)){ //empty evalua un valor 0 como empty = true, por tanto no me sirve en este caso.
            echo "No has introducido un numero";
          } else if ($numero > 1){
              $primo = true;
              for ( $i = 2; $i < $numero; $i++) {
                if ($numero%$i == 0) {
                  echo 'El numero ' . $numero . ' NO es primo';
                  $i = $numero;
                  $primo = false;
                } 
              }
              if ($primo == true){
                echo 'El numero ' . $numero . ' ES primo';
              }
          } else {
            echo 'El numero ' . $numero . ' NO es primo';
          }
        }
        ?>
          <fieldset>
            <legend>Averigua si un número es primo</legend>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
                <input type="text" name="numero" autofocus>
                <input type="submit" value="Comprueba">
              </form>
          </fieldset>
    </div>
  </body>
</html>
