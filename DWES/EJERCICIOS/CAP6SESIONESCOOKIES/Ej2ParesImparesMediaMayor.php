<?php session_start(); ?>
<!DOCTYPE html>
<!--
Ejercicio 2
Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
en el cómputo. Utiliza sesiones.

SI HUBIERA INTRODUCIDO TODOS LOS NUMEROS EN UN ARRAY Y LUEGO HAGO FUNCIONES PARA PROCESAR LOS ARRAY
TENDRIA EL CODIGO DISPONIBLE PARA REUTILIZAR EN OTRO PROGRAMA....  VAMOS, UNAS FUNCIONES.

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
        $_SESSION['numero'];  //declaro una array donde voy introduciendo los numeros
        $arrayNumeros = array();  //aqui guardo los numeros. este array lo envio por SESSION
        $mayorPar;
        $contadorImpares;
               
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $arrayNumeros = $_SESSION['numero']; //cargo en el array lo devuelto por la sesion
          if (!is_numeric($_REQUEST['numero'])){ //empty evalua un valor 0 como empty = true, por tanto no me sirve en este caso.
            echo "No has introducido un numero";
          } else if ($_REQUEST['numero'] < 0){ 
            foreach($arrayNumeros as $num) {
              if ($num%2 != 0) { //solo los impares
                $sumaImpares += $num;
                $contadorImpares++;
              } else {
                 if ($num > $mayorPar) {
                   $mayorPar = $num;
                 }
              }
            }
            echo "<br>La cantidad de números introducidos es: " . count($arrayNumeros);
            echo "<br>La media de los numeros impares introducidos es: " . $sumaImpares / $contadorImpares;
            echo "<br>El mayor de los pares es :" . $mayorPar;
            session_destroy();
          } else {
               $arrayNumeros[] = $_REQUEST['numero']; //voy almacenando los datos
          }
        }
        $_SESSION['numero'] = $arrayNumeros;
        if ($_REQUEST['numero'] >= 0){
        ?>
          <fieldset>
            <legend>Cálculo media impares, mayor par y cantidad cifras introducidas</legend>
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
