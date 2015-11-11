<?php session_start(); ?>
<!DOCTYPE html>
<!--
Ejercicio 1
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.

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
      
      if ($_SESSION['autorizado'] == true){
        //DECLARACION VARIABLES SESION
        $_SESSION['numero'];  //declaro una array donde voy introduciendo los numeros
        $arrayNumeros = array();  //aqui guardo los numeros. este array lo envio por SESSION
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $arrayNumeros = $_SESSION['numero']; //cargo en el array lo devuelto por la sesion
          if (!is_numeric($_REQUEST['numero'])){ //empty evalua un valor 0 como empty = true, por tanto no me sirve en este caso.
            echo "No has introducido un numero";
          } else if ($_REQUEST['numero'] < 0){ 
            foreach($arrayNumeros as $num) {
              $suma += $num;
            }
            echo "La media de los numeros introducidos es: " . $suma / count($arrayNumeros);
            session_destroy();
          } else {
               $arrayNumeros[] = $_REQUEST['numero']; //voy almacenando los datos
          }
        }
        $_SESSION['numero'] = $arrayNumeros;
        if ($_REQUEST['numero'] >= 0){
        ?>
          <fieldset>
            <legend>Cálculo de la media numeros</legend>
            
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
              <!--<form action="Ej13listaNumeros.php" method="post"> -->
              <input type="text" name="numero" autofocus>  
              <input type="submit" value="Continuar">   <!--*OJITO, PONER AQUI EL ECHO**-->
              </form>
          </fieldset>
        <?php 
        }
      } else {
        echo "Ud. no está logeado, no tiene acceso a este software";
      }
        ?>
    </div>
  </body>
</html>
