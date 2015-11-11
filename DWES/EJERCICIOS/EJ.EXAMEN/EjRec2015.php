<!DOCTYPE html>
<!--
Sobre un array, realiza los siguientes apartados. Todos los apartados son acumulativos, es
decir, se deben hacer en orden y en el mismo programa (y en la misma página). Tienen
preferencia los primeros apartados, o sea, si un número debe estar en el color que indica el
apartado b y también del apartado d, se queda en el color que indica el apartado b.
a) El array debe tener 10 columnas y 10 filas y se debe rellenar con números aleatorios
entre 200 y 600 (ambos incluidos). Muestra el array por pantalla.
b) Muestra en rojo la diagonal que va de la esquina superior izquierda a la esquina inferior
derecha.
c) Muestra en verde la diagonal que va de la esquina inferior izquierda a la esquina
superior derecha.
d) Muestra en azul los números que están en los bordes del array.
e) Muestra en negrita todos los números que hay alrededor del mínimo. El mínimo se
puede mostrar en negrita o no, eso es opcional.
f) Muestra en amarillo los números primos.
g) Muestra en rosa los números capicúa.
h) Muestra en cursiva y negrita los puntos de silla, es decir, los que al mismo tiempo son
mínimos en su fila y máximos en su columna.

Author:  Jose A. Mayo Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th {
      	text-align: right;
      }
      td {
        height: 25px;
        width: 25px;
        text-align: center;
        padding: 3px;
      }
      caption {
        caption-side: top;
      }
      div {
        float: right;
        margin: 40px;
      }
      .punto {
        font-style:italic;
        font-weight: bold;
      }
      .pink {
        color: pink;
      }
      .yellow {
        color: yellow;
      }
      .negrita {
        color: black;
        font-weight: bold; 
      }
      .blue {
        color: blue;
      }
      .green {
        color: green;
      }
      .red {
        color: red;
      }
      
      
    </style>
  </head>
  <body>
    <?php
    
    //GENERO EL ARRAY Y LO LLENO DE NUMEROS ALEATORIOS.
    $tamano = 10;
    $arrayMatrizNumeros = array();
    
    
    for ($i = 0; $i < $tamano; $i++){
      for ($j = 0; $j < $tamano; $j++){
        $num = rand(200,600); //generador de aleatorios.
        $arrayMatrizNumeros[$i][$j] = $num; 
      }
    }
    //MUESTRO ARRAY ORIGINAL Y CALCULO POSICION MINIMO
?>  
    <div>
    <table>
      <caption>Array generado <?= $tamano . "x" . $tamano?></caption>
<?php for ($f = 0; $f < $tamano; $f++){ ?>
      <tr>
<?php   for ($c = 0; $c < $tamano; $c++){ 
          if(minimo($arrayMatrizNumeros) == $arrayMatrizNumeros[$f][$c]) {
            $posicionFilaMinimo = $f;
            $posicionColumnaMinimo = $c;
          }
?>
        <td><?= $arrayMatrizNumeros[$f][$c]?></td>
<?php   } ?>
      </tr> 
<?php   } ?>
    </table>
      <p><?php echo minimo($arrayMatrizNumeros) . $posicionFilaMinimo . $posicionColumnaMinimo ?></p>
    </div>
    
    
    <!--MUESTRO ARRAY CON VARIACIONES--> 
    <div>
      <table>
      <caption>Array coloreado <?= $tamano . "x" . $tamano?></caption>
<?php for ($fi = 0; $fi < $tamano; $fi++){ ?>
        <tr>
<?php   for ($ci = 0; $ci < $tamano; $ci++){ ?>
          <td>
            <span class="
<?php     
          if (puntoSilla($arrayMatrizNumeros, $fi, $ci)){
            echo "punto ";
          }
          if (alrededorMinimo($fi, $ci, $posicionFilaMinimo, $posicionColumnaMinimo)) {
            echo "negrita ";
          }
          if (capicua($arrayMatrizNumeros[$fi][$ci])) {
            echo "pink ";
          }
          if (primo($arrayMatrizNumeros[$fi][$ci])) {
            echo "yellow ";
          } 
          if (($fi+$ci) == ($tamano - 1)) { 
            echo "green ";
          }
          if (($fi == 0) || ($fi == ($tamano-1)) || ($ci == 0) || ($ci == ($tamano - 1))){     
            echo "blue ";  
          } 
          if ($fi == $ci){
            echo "red ";
          }?>"><?= $arrayMatrizNumeros[$fi][$ci] ?></span>
          </td>
<?php   } ?>
        </tr>
<?php } ?>  
      </table>
    </div>
    
<?php 
     
    //FUNCION CAPICUA == DEVUELVE BOOLEANO
    function capicua($data) {
      if ($data == strrev($data)) {
        return true;
      } else {
        return false;
      }
    }
    //===FIN FUNCION CAPICUA

    //FUNCION PRIMO == DEVUELVE BOOLEANO
      function primo($data) {
         if ($data > 1){
              $primos = true;
              for ( $i = 2; $i < $data; $i++) {
                if ($data%$i == 0) {
                  //return false;
                  $i = $data;
                  $primos = false;
                } 
              }
              if ($primos == true){
                return true;
              }
          } else {
            return false;
          }
      } 
    //===FIN FUNCION PRIMO
  
    //FUNCION MINIMO == DEVUELVE INTEGER MINIMO
      function minimo($data){
        $numMinimo = PHP_INT_MAX;
        foreach($data as $num){
          foreach ( $num as $n){
            if ($n < $numMinimo){
              $numMinimo = $n;
            }
        }
        }
        return $numMinimo;
      }
    //===FIN FUNCION MINIMO
      
    //FUNCION MAXIMO == DEVUELVE INTEGER MAXIMO
      function maximo($data) {
        $numMaximo = -PHP_INT_MAX;
        foreach($data as $num){
          foreach ( $num as $n){
          if ($n > $numMaximo){
            $numMaximo = $n;
          }
        }
        }
        return $numMaximo;
      }
    //===FIN FUNCION MAXIMO  
    
    //FUNCION ALREDEDOR MINIMO == DEVUELVE BOOLEANO
    function alrededorMinimo($fila, $columna, $posicionFilaMinimo, $posicionColumnaMinimo) {
      if ((abs($fila - $posicionFilaMinimo) <= 1) && (abs($columna - $posicionColumnaMinimo) <= 1)){
        return true;
      }
      return false;
    }
  //===FIN FUNCION ALREDEDOR MINIMO 
    
    //FUNCION MINIMO EN FILA == DEVUELVE INTEGER MINIMO
      function minimoFila($data, $f){
        $numMinimo = PHP_INT_MAX;
        for ($c = 0; $c < count($data); $c++){
            if ($data[$f][$c] < $numMinimo){
              $numMinimo = $data[$f][$c];
            }
        }
        return $numMinimo;
      }
        
    //===FIN FUNCION MINIMO EN FILA
   

      //FUNCION MAXIMO EN COLUMNA == DEVUELVE INTEGER MAXIMO
      function maximoColumna($data, $c){
        $numMaximo = -PHP_INT_MAX;
        for ($f = 0; $f < count($data); $f++){
            if ($data[$f][$c] > $numMaximo){
              $numMaximo = $data[$f][$c];
            }
        }
        return $numMaximo;
      }
        
    //===FIN FUNCION MINIMO EN FILA
    
    
    //FUNCION PUNTO DE SILLA == DEVUELVE BOOLEANO
    function puntoSilla($data, $f, $c){
      if ((minimoFila($data[$f][$c])) && (maximoFila($data[$f][$c]))){
            return true;
      }
      return false;
    }

   //===FIN FUNCION PUNTO DE SILLA  


?>
  
  </body>
</html>
