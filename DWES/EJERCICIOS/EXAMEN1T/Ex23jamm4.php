<!DOCTYPE html>
<!--
Crea un array bidimensional de 6 filas por 8 columnas relleno con números aleatorios entre 1 y 500 (ambos
incluidos). Los números se pueden repetir. Se deben mostrar todos los números bien alineados en filas y columnas.
Muestra el mínimo de entre los primos en rojo y los números adyacentes en amarillo. Si el mínimo primo se repite, se
puede colorear uno cualquiera de ellos o todos, como al alumno le resulte más fácil.

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
        float: left;
        margin: 40px;
      }
      .yellow {
        color: yellow;
      }
      .red {
        color: red;
      }
      
      
    </style>
  </head>
  <body>
    <?php
    
    //GENERO EL ARRAY Y LO LLENO DE NUMEROS ALEATORIOS.
    $tamanoFila = 6;
    $tamanoColumna = 8;
    $arrayMatrizNumeros = array();
    $minimoPrimo = PHP_INT_MAX;
    
    
    for ($i = 0; $i < $tamanoFila; $i++){
      for ($j = 0; $j < $tamanoColumna; $j++){
        $num = rand(1,500); //generador de aleatorios.
        $arrayMatrizNumeros[$i][$j] = $num; 
      }
    }
    //MUESTRO ARRAY ORIGINAL Y CALCULO POSICION MINIMO
?>  
    <div>
    <table>
      <caption>Array aleatorio generado <?= $tamanoFila . "x" . $tamanoColumna?></caption>
<?php for ($f = 0; $f < $tamanoFila; $f++){ ?>
      <tr>
<?php   for ($c = 0; $c < $tamanoColumna; $c++){ 
          if ((primo($arrayMatrizNumeros[$f][$c])) && (($arrayMatrizNumeros[$f][$c])< $minimoPrimo)) {
            $minimoPrimo = $arrayMatrizNumeros[$f][$c];
            $posicionFilaMinimo = $f;
            $posicionColumnaMinimo = $c;
          }
?>
        <td><?= $arrayMatrizNumeros[$f][$c]?></td>
<?php   } ?>
      </tr> 
<?php   } ?>
    </table>
    <!--  <p><?php echo $arrayMatrizNumeros[$posicionFilaMinimo][$posicionColumnaMinimo] . " " . $posicionFilaMinimo . $posicionColumnaMinimo ?></p>-->
    </div>
    
    
    <!--MUESTRO ARRAY CON VARIACIONES--> 
    <div>
      <table>
      <caption>Array coloreado <?= $tamanoFila . "x" . $tamanoColumna?></caption>
<?php for ($fi = 0; $fi < $tamanoFila; $fi++){ ?>
        <tr>
<?php   for ($ci = 0; $ci < $tamanoColumna; $ci++){ ?>
          <td>
            <span class="
<?php     
          if (alrededorMinimo($fi, $ci, $posicionFilaMinimo, $posicionColumnaMinimo)) {
            echo "yellow ";
          }
          if (($ci == $posicionColumnaMinimo) && ($fi == $posicionFilaMinimo)){
            echo "red ";
         
          }?>"><?= $arrayMatrizNumeros[$fi][$ci] ?></span>
          </td>
<?php   } ?>
        </tr>
<?php } ?>  
      </table>
    </div>
    
<?php 
     

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
      
   
    //===FIN FUNCION MAXIMO  
    
    //FUNCION ALREDEDOR MINIMO == DEVUELVE BOOLEANO
    function alrededorMinimo($fila, $columna, $posicionFilaMinimo, $posicionColumnaMinimo) {
      if ((abs($fila - $posicionFilaMinimo) <= 1) && (abs($columna - $posicionColumnaMinimo) <= 1)){
        return true;
      }
      return false;
    }
  //===FIN FUNCION ALREDEDOR  
    
    



?>
  
  </body>
</html>
