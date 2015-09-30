<!DOCTYPE html>
<!--
Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
de conocimientos en las diferentes asignaturas del curso.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <fieldset>
      <legend>Cuestionario DAW</legend>
    <span>Selecciona las respuestas que creas correctas y pulsa enviar</span><br><br>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        <fieldset>
          <legend>1.-pregunta a responder</legend>
          <label for="a">A</label><input type="radio" name="a" value="1">
          <label for="B">B</label><input type="radio" name="a" value="0">
        </fieldset>
        
        <input type="submit" value="Enviar">
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