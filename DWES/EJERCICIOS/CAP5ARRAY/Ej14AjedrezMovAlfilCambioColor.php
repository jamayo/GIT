<!DOCTYPE html>
<!--
Ejercicio 14
Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría
saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un
color diferente para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal.
El tablero cuenta con 64 casillas. Las columnas se indican con las letras de la “a” a la “h” y las filas
se indican del 1 al 8.

Author: Jose A. Mayo Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      #pantalla {
        position: relative;
        height: 280px;
        width: 280px;
        border: 1px solid black;
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
        //border: 1px solid black;
        padding-top: 5px;
      }
      
      .b {
  
        float: left;
        height: 18px;
        width: 30px;
        text-align: center;
        //border: 1px solid black;
        //padding-top: 5px;
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
      div.blanco {
        height: 30px;
        width: 30px;
        background-color: white;
        float: left
      }
      div.azul {
        height: 30px;
        width: 30px;
        background-color: blue;
        float: left
      }
      span {
        color:green;
        font-weight: bold;
      }
      .minimo {
        color:blue;   
        font-weight: bold;
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
 
    <div id="tablero">
    <?php
      
      //GENERO EL ARRAY Y LO LLENO DE IMAGENES
      $numeros = array();
      for ($i = 0; $i < 8; $i++){
        
        for ($j = 0; $j < 8; $j++){
          if ($negro) {
            $numeros[$i][$j] = "<div class='negro'></div>";
            $negro = false;
          } else {
            $numeros[$i][$j] = "<div class='blanco'></div>";
            $negro = true;
          }
        }
        if ($negro) {
         $negro = false;
        } else {
          $negro = true;
        }
      }
          
   
      
      //MUESTRO EL ARRAY
      
      for ($f = 0; $f < 8; $f++){
        for ($c = 0; $c < 8; $c++){
          echo $numeros[$f][$c];
        } 
        echo "<br>";
      }
         
      
    ?>
      
     
    </div>
      
      
    </div>
    
  </body>
</html>
