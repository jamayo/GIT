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
        if ($_SERVER["REQUEST_METHOD"] == "POST") { //si he pulsado boton del form
          $hora = $_REQUEST['hora'];
          echo ((!is_numeric($hora))?"No has introducido la hora"
          :((($hora < 6 && $hora >= 0)||($hora < 24 && $hora > 20))?"Buenas noches"
                  :(($hora > 5 && $hora < 13)? "Buenos días"
                  :(($hora > 12 && $hora < 21)?"Buenas tardes"
                  :"El dato introducido no es una hora")))); 
        }
      ?>   
  </body>
</html>