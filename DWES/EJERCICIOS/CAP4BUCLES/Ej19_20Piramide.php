<!DOCTYPE html>
<!--
Ejercicio 19
Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado
mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen
de las 5 que se deben dar a elegir mediante un formulario.

Ejercicio 20
Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.

Author:  Jose A. Mayo
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
        $altura = $_REQUEST['altura'];
        $pintar = $_REQUEST['dibujo'];
        $rellena = $_REQUEST['rellena'];
        //$pintar = "#"; //luego puedo cambiar esto para introducir por usuario
        if (is_numeric($numero)){  //COMPROBAR..
          echo "No has introducido un numero";
        } else if ($rellena == "si"){
          $nivel = 0;
          for ($nivel = 1; $nivel <= $altura; $nivel++){
            for ($i = 1; $i <= ($altura - $nivel); $i++){
              echo "&nbsp;&nbsp;&nbsp;";
            }
            for ($p = 1; $p <= (($nivel * 2 )- 1); $p++){
              echo "$pintar";
              echo "&nbsp;";
            }
            echo "<br>";
          }
        } else {  //no rellena
          $nivel = 0;
          for ($nivel = 1; $nivel <= $altura; $nivel++){
            for ($i = 1; $i <= ($altura - $nivel); $i++){
              echo "&nbsp;&nbsp;&nbsp;";
            }
            if ($nivel == 1){
              echo "$pintar";
              echo "<br>";
            } else if ($nivel == $altura){
              for ($p = 1; $p <= (($nivel * 2 )- 1); $p++){
              echo "$pintar";
              echo "&nbsp;";
              }
            }else {
              echo "$pintar";
              for ($p = 1; $p <= (($nivel * 2 )- 3); $p++){
                echo "&nbsp;&nbsp;&nbsp;";
              }
              echo "$pintar";
              echo "<br>";
            }
        }
      }
      }
    ?>
      <fieldset>
        <legend>Introduce la altura de la piramide a pintar</legend>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
            <input type="text" name="altura" autofocus><br/>
            <label for="dibujo">Elige dibujo a pintar</label> 
            <select id="dibujo" name="dibujo">
              <option value="" selected="selected">- selecciona -</option>
              <option value="#"> # </option>
              <option value="*"> *</option>
              <option value="o"> o</option>
              <option value="1"> 1</option>
            </select><br/>
            <label for="rellena">Elige si la quieres rellena</label> 
            <select id="rellena" name="rellena">
              <option value="" selected="selected">- selecciona -</option>
              <option value="si"> Sí </option>
              <option value="no"> No</option>
            </select>
            <input type="submit" value="Pinta">
          </form>
      </fieldset>
    </div>
  </body>
</html>
