<?php session_start(); ?>
<!DOCTYPE html>
<!--
Ejercicio 3
Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media. Utiliza sesiones.

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
        //DECLARACION VARIABLES 
        $contador;
        $acumulado;
        $_SESSION['contador'];  //declaro una array donde voy introduciendo los numeros
        $_SESSION['acumulado']; 
        
               
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $contador = $_SESSION['contador']; //cargo en el array lo devuelto por la sesion
          $acumulado = $_SESSION['acumulado'];
          if (!is_numeric($_REQUEST['numero'])){ //empty evalua un valor 0 como empty = true, por tanto no me sirve en este caso.
            echo "No has introducido un numero";
          } else if (($_REQUEST['numero'] + $_SESSION['acumulado']) <= 10000) {
            $acumulado += $_REQUEST['numero'];
            $contador++;
          } else {
            echo "<br>El total acumulado es: " . $acumulado;
            echo "<br>La cantidad de numeros introducidos es:  " . $contador;
            echo "<br>La media de los numeros introducidos es: " . $acumulado / $contador;
            session_destroy();
          }
        }
        $_SESSION['contador'] = $contador;
        $_SESSION['acumulado'] = $acumulado;
        if (($_REQUEST['numero'] + $acumulado) <= 10000){
        ?>
          <fieldset>
            <legend>Cuando supere la suma los 10000, mostrará media, cantidad y suma</legend>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
              <!--<form action="Ej13listaNumeros.php" method="post"> -->
              <input type="text" name="numero" autofocus>  
              <input type="submit" value="Continuar">   <!--*OJITO, PONER AQUI EL ECHO**-->
              </form>
          </fieldset>
        <?php 
        }
        ?>
    </div>
  </body>
</html>
