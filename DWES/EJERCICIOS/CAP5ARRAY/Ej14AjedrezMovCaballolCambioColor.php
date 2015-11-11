<!DOCTYPE html>
<!--
Ejercicio 14
Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría
saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un
color diferente para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal.
El tablero cuenta con 64 casillas. Las columnas se indican con las letras de la “a” a la “h” y las filas
se indican del 1 al 8.  MODIFICADO PATRON A MOVIMIENTO DEL CABALLO.

Author: Jose A. Mayo Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      body {
        background-color:cornsilk;
        background: url(img/background.jpg) no-repeat center center fixed; 
        background-size: cover;
      }
      #pantalla {
        position: relative;
        margin: auto;
        height: 280px;
        width: 280px;
        border: 1px solid black;
        //background-color:lavender;
        background-color:skyblue;
      }
      .clear {
        clear:both;
      }
      .vaciol {
        float:left;
        height: 20px;
        width: 21px;
      }
      .vacior {
        float:right;
        height: 20px;
        width: 19px;
      }
      .vaciob {
        float: left;
        height: 20px;
        width: 20px;
      }
      .t {
        float: left;
        height: 20px;
        width: 30px;
        text-align: center;
        /* Rotate div */
        -ms-transform: rotate(180deg); /* IE 9 */
        -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
        transform: rotate(180deg);
      }
      .l {
        float:left;
        height: 25px;
        width: 18px;
        text-align: center;
        padding-top: 5px;
      }
      .r {
        float:right;
        height: 25px;
        width: 18px;
        text-align: center;
        padding-top: 5px;
        /* Rotate div */
        -ms-transform: rotate(180deg); /* IE 9 */
        -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
        transform: rotate(180deg);
      }
      .b {
        float: left;
        height: 18px;
        width: 30px;
        text-align: center;
      }
      #tablero {
        position: absolute;
        top: 20px;
        left: 20px;
        height: 240px;
        width: 240px;
        border: 1px solid black;
      }
      div.negro {
        height: 30px;
        width: 30px;
        background-color: black;
        float: left
      }
      div.negroalfil {
        height: 30px;
        width: 30px;
        background-image: url("img/bola_negra.png");
        background-repeat: no-repeat;
        float: left
      }
      div.alfilnegro {
        height: 30px;
        width: 30px;
        background-image: url("img/caballo_negro.png");
        //opacity:0.3;
        float: left
      }
      div.alfilblanco {
        height: 30px;
        width: 30px;
        background-image: url("img/caballo_blanco.png");
        //opacity:0.3;
        float: left
      }
      div.blanco {
        height: 30px;
        width: 30px;
        background-color: white;
        float: left
      }
      div.blancoalfil {
        height: 30px;
        width: 30px;
        background-image: url("img/bola_blanca.png");
        float: left
      }
      #botonera {
        position: relative;
        background-color:lavender;
        //background-color:azure;
        width: 146px;
        height: 110px;
       // border: 1px solid black;
        margin: 10px auto;
        font-size: 12px;
      }
      #incorrecto {
        position: relative;
        background-color:lavender;
        width: 180px;
        height: 30px;
        border: 1px solid black;
        margin: 10px auto;
        font-size: 10px;
        padding: 2px;
      }
      #inicio {
       
        width: 53px;
        border: 1px solid black;
        margin: 18px auto;
        font-size: 11px;
      }
    </style>
  </head>
  <body>
    <div id="pantalla">
      <div class="vaciol"></div>
      <div class="t">a</div>
      <div class="t">b</div>
      <div class="t">c</div>
      <div class="t">d</div>
      <div class="t">e</div>
      <div class="t">f</div>
      <div class="t">g</div>
      <div class="t">h</div>
      <div class="vacior"></div>
      <div class="clear"></div>
      <div class="l">8</div>
      <div class="r">8</div>
      <div class="clear"></div>
      <div class="l">7</div>
      <div class="r">7</div>
      <div class="clear"></div>
      <div class="l">6</div>
      <div class="r">6</div>
      <div class="clear"></div>
      <div class="l">5</div>
      <div class="r">5</div>
      <div class="clear"></div>
      <div class="l">4</div>
      <div class="r">4</div>
      <div class="clear"></div>
      <div class="l">3</div>
      <div class="r">3</div>
      <div class="clear"></div>
      <div class="l">2</div>
      <div class="r">2</div>
      <div class="clear"></div>
      <div class="l">1</div>
      <div class="r">1</div>
      <div class="clear"></div>
      <div class="vaciob"></div>
      <div class="b">a</div>
      <div class="b">b</div>
      <div class="b">c</div>
      <div class="b">d</div>
      <div class="b">e</div>
      <div class="b">f</div>
      <div class="b">g</div>
      <div class="b">h</div>
      <div class="vaciob"></div>
      <div class="vacio"></div>
      
<?php
  if (!$iniciado) {
?>
    <div id="tablero">
<?php
    $arrayLetras = array ("", a, b, c, d, e, f, g, h);
    $pidoPosicion = true;
    $negro = false;

    //GENERO EL ARRAY Y LO LLENO DE CAPAS NEGRAS Y BLANCAS (TABLERO AJEDREZ)
    $arrayTablero = array();
    for ($i = 8; $i > 0; $i--){
      for ($j = 1; $j < 9; $j++){
        if ($negro) {
          $arrayTablero[$i][$j] = "<div class='negro'></div>";
          $negro = false;
        } else {
          $arrayTablero[$i][$j] = "<div class='blanco'></div>";
          $negro = true;
        }
      }
      if ($negro) {
        $negro = false;
      } else {
        $negro = true;
      } //PROVOCO EL CRUCE DE NEGRO/BLANCO EN LAS DISTINTAS FILAS
    }
    //MUESTRO EL TABLERO
    for ($f = 8; $f > 0; $f--){
      for ($c = 1; $c < 9; $c++){
        echo $arrayTablero[$f][$c];
      } 
      echo "<br>";
    }
?>
    </div>  
<?php
  } 
    ?>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $iniciado = true;
    $pidoPosicion = false;
    $arrayTablero = unserialize(base64_decode($_POST['arrayTablero']));
    $arrayLetras = unserialize(base64_decode($_POST['arrayLetras']));
    $pidoPosicion = ($_POST['pidoPosicion']);
    $posicion = ($_POST['posicion']);
    $posicionEnLetra = strtolower(substr($posicion,0,1));
    $posicion_num = substr($posicion,1,1);
    if (!$pidoPosicion){ //SI PIDO POSICION, EVITO EVALUAR INPUT VACIO
      if ((preg_match('/[a-h]/', $posicionEnLetra)) && (preg_match('/[1-8]/', $posicion_num))) {
      for ($i = 1; $i <count($arrayLetras); $i++){
        if ( $arrayLetras[$i] == $posicionEnLetra) {
            $posicion_letra = $i;
        }
      }
    
    //MUESTRO EL ARRAY
?>      
    <div id="tablero">
<?php     
      $posnegro;
      if ($arrayTablero[$posicion_num][$posicion_letra] == "<div class='negro'></div>"){
        $posnegro = true;
      } else {
        $posnegro = false;
      }
      $movMasFila = 
      $eje1 = $posicion_num + $posicion_letra;//el eje1 cumple que la resta de fila-columna es igual a la del minimo
      $eje2 = $posicion_num - $posicion_letra;//el eje2 cumple que la suma de fila+columna es igual a la del minimo
      for ($f = 8; $f > 0; $f--){
        for ($c = 1; $c < 9; $c++){
          if (($f == $posicion_num) && ($c == $posicion_letra)){
            if ($posnegro){
              echo "<div class='alfilnegro'></div>";
            }else {
              echo "<div class='alfilblanco'></div>";
            }
          } else if (((abs($f - $posicion_num) == 1) && (abs($c - $posicion_letra) == 2))||
            ((abs($f - $posicion_num) == 2) && (abs($c - $posicion_letra) == 1))){
            if (($f + $c)%2 == 0) {
              echo "<div class='negroalfil'></div>";
            } else {
              echo "<div class='blancoalfil'></div>";
            }
          } else {
            echo $arrayTablero[$f][$c];
          } 
        }
         echo "<br>";
      }
      echo "</div>";
      $otroMovimiento = true;
      $mensaje_error = false;
      } else {
        $otroMovimiento = true;
        $mensaje_error = true;
        $pidoPosicion = false;
      }
    }
  } // BUCLE SI RECIBO UN POST
?> 
      </div>
    </div>
<?php
  if ($pidoPosicion) {
    
?>  <!--INTRODUCE POSICION DEL ALFIL -->
    <div id="botonera">
      <fieldset>
      <legend>Movimientos del Caballo</legend>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          Notacion ejem: a2  g7  h8<br><br>
          Posición: <input type="text" name ="posicion" maxlength="2" size="1" autocomplete="off" autofocus>
          <input type="hidden" name="arrayTablero" value="<?= print base64_encode(serialize($arrayTablero)) ?>">
          <input type="hidden" name="arrayLetras" value="<?= print base64_encode(serialize($arrayLetras)) ?>">
          <input type="submit" value="Ver movimientos">    
        </form>
      </fieldset>
    </div>    
<?php
  }
  if ($otroMovimiento){
    $pidoPosicion = true;
    
?>
     <div id='inicio'>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <button name="otroMovimiento" type="submit">Inicio</button>
          <input type='hidden' name='pidoPosicion' value='<?= $pidoPosicion ?>'>
          <input type="hidden" name="arrayTablero" value="<?= print base64_encode(serialize($arrayTablero)) ?>">
          <input type="hidden" name="arrayLetras" value="<?= print base64_encode(serialize($arrayLetras)) ?>">
        </form>
     </div>
<?php
  }
  if ($mensaje_error){
    echo "<div id='incorrecto'>No has introducido bien las coordenadas.<br>El patrón de coordenadas es [a-h][1-8]</div>";
    $mensaje_error = false;
  }
?>
  </body>
</html>
