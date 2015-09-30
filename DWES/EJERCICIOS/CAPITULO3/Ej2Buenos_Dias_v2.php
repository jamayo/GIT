<!DOCTYPE html>
<!--
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
      <span>Introduce la hora en formato 24h (0-23)</span><br>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <span>hora&nbsp</span><input type="text" name="hora">
        <input type="submit" value="Comprobar">
      </form>
    
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {   //si he pulsado boton del form
          $hora = $_REQUEST['hora'];
          if (!is_numeric($hora)){ //empty evalua un valor 0 como empty = true, por tanto no me sirve en este caso.
            echo "No has introducido la hora";
          } else {  //evaluo el numero introducido
            if (($hora < 6 && $hora >= 0)||($hora < 24 && $hora > 20)) {  // >= 0 entra por aqui las letras (como cero), pero soluciono con is_numeric (no quiero usar control html numerico en formulario
              echo "Buenas noches";
            }else if ($hora > 5 && $hora < 13) {
              echo "Buenos días";
            }else if ($hora > 12 && $hora < 21) {
              echo "Buenas tardes";
            }else {
              echo "El dato introducido no es una hora";
            }
          }
        }
      ?>   
  </body>
</html>