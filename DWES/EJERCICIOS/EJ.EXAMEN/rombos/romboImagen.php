<!DOCTYPE html>
<!--
Dibujo del rombo con una imagen elegida, según la altura dada
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
        text-align: center;
        width: 100%;
      }
      section form label img {
        width: 7.5em;
        border: 1em #070D18 solid;
        border-width: 0.25em;
        margin: 1% 0;
      }
      section form input[type="radio"] {
        margin-right: 3%;
      }
      img.foto {
        width: 5em;
        border: 1em #070D18 solid;
        border-width: 0.25em;
        margin: 0;
      }
      img.invisible {
        visibility: hidden;
      }
    </style>
  </head>
  <body>
    <section> 
      <form action="#" method="get">
        Selecciona la imagen que quieras: <br>
        <label><img src="images/caca.jpg" alt=""/></label>
        <input type="radio" name="icono" value="images/caca.jpg" checked="checked">
        <label><img src="images/emoticono10.jpg" alt=""/></label>
        <input type="radio" name="icono" value="images/emoticono10.jpg">
        <label><img src="images/emoticono6.jpg" alt=""/></label>
        <input type="radio" name="icono" value="images/emoticono6.jpg">
        <label><img src="images/emoticono7.jpg" alt=""/></label>
        <input type="radio" name="icono" value="images/emoticono7.jpg">
        <label><img src="images/flamenca.jpg" alt=""/></label>
        <input type="radio" name="icono" value="images/flamenca.jpg"><br>
        
        Introduce la altura (piensa que para que quede perfecto debe ser al menos de 5): 
        <input type="number" name="altura" min="3" step="2"><br>
        <input type="submit" name="aceptar" value="Aceptar">
      </form>

      <?php
        $ruta = $_REQUEST['icono'];
        $aceptar = $_REQUEST['aceptar'];
        $altura = $_REQUEST['altura'];

        echo "<div id='ejercicio'>";
        //Si se ha recibido un caracter, entra en el if
        if ($aceptar) {
          $foto = "<img src='" . $ruta . "' class='foto'>";
          
          //pinto el caracter de la esquina superior
          echo "$foto<br>";
          //pinto la mitad superior
          for ($fila = 2; $fila < (($altura / 2) + 1); $fila++) {
            //el primer caracter
            echo $foto; 
            //los espacios en blanco de dentro
            for ($espDentro = 1; $espDentro < (($fila * 2) - 2); $espDentro++) {
              echo "<img src='" . $ruta . "' class='foto invisible'>";
            }
            //y el segundo caracter
            echo "$foto<br>";
          }
          
          //pinto la mitad inferior
          for ($fila = (($altura / 2) + 2); $fila < $altura; $fila++) {
            //el primer caracter
            echo $foto; 
            //los espacios en blanco de dentro
            for ($espDentro = 1; $espDentro <= ($altura - 4 - $resta); $espDentro++) {
              echo "<img src='" . $ruta . "' class='foto invisible'>";
            }
            $resta += 2;
            //y el segundo caracter
            echo "$foto<br>";
          }
          echo $foto; 
        }
        echo "</div>";
      ?>
    </section>
  </body>
</html>
