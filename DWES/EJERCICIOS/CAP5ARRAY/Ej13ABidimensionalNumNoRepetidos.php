<!DOCTYPE html>
<!--
Ejercicio 13
Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendidos
entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede
repetir ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que se
cumplan los siguientes requisitos:
• Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.
• El mínimo debe aparecer en color azul.
• El resto de números debe aparecer en color negro.

Author: Jose A. Mayo Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
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
    <?php
      $minimo = 1000; //evaluo sobre numero superior al cualquiera de la matriz.
      //GENERO EL ARRAY Y LO LLENO DE NUMEROS ALEATORIOS.
      $numeros = array();
      for ($i = 0; $i < 6; $i++){
        for ($j = 0; $j < 9; $j++){
          do {
            $num = rand(100,999);
            foreach($numeros as $fila){
              foreach ($fila as $columna){
                if($columna == $num){
                  $unico = false;
                  break;
                } else {
                  $unico = true;
                }
                if ($unico) {
                $numeros[$i][$j] = $num;
                } 
              }
            }
          }while (!unico);
          $numeros[$i][$j] = $num; 
        }
      }
      //PROCESO EL ARRAY PARA SABER CUAL ES EL NUMERO MINIMO
      for ($i = 0; $i < 6; $i++){
        for ($j = 0; $j < 9; $j++){
          if($minimo > $numeros[$i][$j]){
            $minimo = $numeros[$i][$j];
            $pos_fila = $i;
            $pos_col = $j;
          }
        }
      }
      echo "minimo : " . $minimo . "<br>coordenadas:  fila=>" . $pos_fila . " columna=>" . $pos_col . "<br><br>";
      
      //MUESTRO EL ARRAY
      $eje1 = $pos_fila - $pos_col;//el eje1 cumple que la resta de fila-columna es igual a la del minimo
      $eje2 = $pos_fila + $pos_col;//el eje2 cumple que la suma de fila+columna es igual a la del minimo
      for ($f = 0; $f < 6; $f++){
        for ($c = 0; $c < 9; $c++){
          if (($f == $pos_fila) && ($c == $pos_col)){
            echo "<span class='minimo'>" . $numeros[$f][$c] . ",</span> ";
          } else if ((($f + $c) == $eje2) || (($f - $c) == $eje1)) {
            echo "<span>" . $numeros[$f][$c] . ",</span> ";
          } else {
            echo $numeros[$f][$c] . ",";
          } 
        }
         echo "<br>";
      }
    ?>
  </body>
</html>
