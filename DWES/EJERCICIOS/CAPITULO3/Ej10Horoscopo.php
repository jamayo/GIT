<!DOCTYPE html>
<!--
Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <fieldset>
      <legend>Horoscopo</legend>
    <span>Introduce el dia (1-31) y el mes (1-12) de nacimiento</span><br><br>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <span>día&nbsp&nbsp</span><input type="text" name="dia"><br><br>
        <span>mes&nbsp</span><input type="text" name="mes"><br><br>
        <input type="submit" value="Comprobar"><br>
      </form>
    </fieldset> 
    
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {   //si he pulsado boton del form
          $dia = $_REQUEST['dia'];
          $mes = $_REQUEST['mes'];
          if ((!is_numeric($dia)) || (!is_numeric($mes)) || ($dia > 31) || ($dia < 0)){ //empty evalua un valor 0 como empty = true, por tanto no me sirve en este caso.
            echo "No has introducido correctamente algun/os datos pedidos";
          } else { 
              switch($mes) {
                case 1:
                  if ($dia < 20)  {
                    echo "Tu horoscopo es Capricornio";
                  } else {
                    echo "Tu horoscopo es Acuario";
                  }
                  break;
                case 2:
                  if ($dia < 18) {
                    echo "Tu horoscopo es Acuario";
                  } else {
                    echo "Tu horoscopo es Piscis";
                  }
                  break;
                case 3:
                  if ($dia < 20) {
                    echo "Tu horoscopo es Piscis";
                  } else {
                    echo "Tu horoscopo es Aries";
                  }
                  break;
                case 4:
                  if ($dia < 20) {
                    echo "Tu horoscopo es Aries";
                  } else {
                    echo "Tu horoscopo es Tauro";
                  }
                  break;
                case 5:
                  if ($dia < 21) {
                    echo "Tu horoscopo es Tauro";
                  } else {
                    echo "Tu horoscopo es Géminis";
                  }
                  break;
                case 6:
                  if ($dia < 21) {
                    echo "Tu horoscopo es Géminis";
                  } else {
                    echo "Tu horoscopo es Cáncer";
                  }
                  break;
                case 7:
                  if ($dia < 23) {
                    echo "Tu horoscopo es Cáncer";
                  } else {
                    echo "Tu horoscopo es Leo";
                  }
                  break;
                case 8:
                  if ($dia < 23) {
                    echo "Tu horoscopo es Leo";
                  } else {
                    echo "Tu horoscopo es Virgo";
                  }
                  break;
                case 9:
                  if ($dia < 23) {
                    echo "Tu horoscopo es Virgo";
                  } else {
                    echo "Tu horoscopo es Libra";
                  }
                  break;
                case 10:
                  if ($dia < 23) {
                    echo "Tu horoscopo es Libra";
                  } else {
                    echo "Tu horoscopo es Escorpio";
                  }
                  break;
                case 11:
                  if ($dia < 22) {
                    echo "Tu horoscopo es Escorpio";
                  } else {
                    echo "Tu horoscopo es Sagitario";
                  }
                  break;
                case 12:
                  if ($dia < 22) {
                    echo "Tu horoscopo es Sagitario";
                  } else {
                    echo "Tu horoscopo es Capricornio";
                  }
                  break;
                default:
                    echo "Mes introducido no existe";
                  break;
              }   
          }
        }
      ?>   
  </body>
</html>