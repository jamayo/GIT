<!DOCTYPE html>
<!--
Ejercicio 7
Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/cajafuerte.css">
    
  </head>
  <body>
    <div id="pantalla">
      <div id="mostrar">
        <p><b>MARQUE  #  para validar combinación y  *   para borrar</b></p>
    <?php
        $clave = 1111;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $numero = $_REQUEST['numero'];
          $combinacion = $_REQUEST['combinacion'];
          if (($numero != "#") && ($numero != "*")) {
            $combinacion = ($combinacion * 10) + $numero;
            echo "Combinación marcada: " . $combinacion;
          }else if ($numero == "*") {
            $combinacion = 0;
            echo "Combinación borrada, introduzca de nuevo los números";
          }else {
            if ( $combinacion == $clave ){
              echo "Has abierto la caja, la combinación es: " . $clave;
              $combinacion = 0;
            }else {
              echo "La combinación " . $combinacion . " introducida no es correcta";
              $combinacion = 0;
            }
          }
        }
      ?>
      </div>
      <div id="cajafuerte">

        <div class="mitadhorizontal"></div>

        <div class="mitadhorizontal">
          <div class="mitadvertical"></div>
          <div class="mitadvertical">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
              <div class="teclado">
                <input class="button" name="numero" type="submit" value="1">
              </div>
              <div class="teclado">
                <input class="button" name="numero" type="submit" value="2">
              </div>
              <div class="teclado">
                <input class="button" name="numero" type="submit" value="3">
              </div>
              <div class="teclado">
                <input class="button" name="numero" type="submit" value="4">
              </div>
              <div class="teclado">
                <input class="button" name="numero" type="submit" value="5">
              </div>
              <div class="teclado">
                <input class="button" name="numero" type="submit" value="6">
              </div>
              <div class="teclado">
              <input class="button" name="numero" type="submit" value="7">
                </div>
                <div class="teclado">
              <input class="button" name="numero" type="submit" value="8">
                </div>
                <div class="teclado">
              <input class="button" name="numero" type="submit" value="9">
                </div>
                <div class="teclado">
              <input class="button" name="numero" type="submit" value="*">
              </div>
                <div class="teclado">
              <input class="button" name="numero" type="submit" value="0">
                </div>
                <div class="teclado">
              <input class="button" name="numero" type="submit" value="#">
              <input type="hidden" name="combinacion" value="<?php echo $combinacion ?>"> 
                </div>
            </form>
          </div>
        </div>
      </div> 
      
    </div>
  </body>
</html>
