<!DOCTYPE html>
<!--
Dibujo del rombo con un caracter elegido, según la altura dada
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      section {
        margin: 0 5%;
      }
      div#ejercicio { 
        font-family: monospace; 
        text-align: center;
        width: 40%;
      }
    </style>
  </head>
  <body>
    <section> 
      <form action="#" method="get">
        Introduce el caracter que quieras: 
        <input type="text" name="caracter" size="3" maxlength="1"><br>
        Y la altura (piensa que para que quede perfecto debe ser al menos de 5): 
        <input type="number" name="altura" min="3" step="2"><br>
        <input type="submit" name="aceptar" value="Aceptar">
      </form>

      <?php
        $caracter = trim($_REQUEST['caracter']);
        $aceptar = $_REQUEST['aceptar'];
        $altura = $_REQUEST['altura'];

        echo "<div id='ejercicio'>";
        //Si se ha recibido un caracter, entra en el if
        if ($aceptar) {
          //pinto el caracter de la esquina superior
          echo "$caracter<br>";
          //pinto la mitad superior
          for ($fila = 2; $fila < (($altura / 2) + 1); $fila++) {
            //el primer caracter
            echo $caracter; 
            //los espacios en blanco de dentro
            for ($espDentro = 1; $espDentro < (($fila * 2) - 2); $espDentro++) {
              echo "&nbsp;";
            }
            //y el segundo caracter
            echo "$caracter<br>";
          }
          //pinto la mitad inferior
          for ($fila = (($altura / 2) + 2); $fila < $altura; $fila++) {
            //el primer caracter
            echo $caracter; 
            //los espacios en blanco de dentro
            for ($espDentro = 1; $espDentro <= ($altura - 4 - $resta); $espDentro++) {
              echo "&nbsp;";
            }
            $resta += 2;
            //y el segundo caracter
            echo "$caracter<br>";
          }
          echo $caracter; 
        }
        echo "</div>";
      ?>
    </section>
  </body>
</html>
