<!DOCTYPE html>
<!--
Realiza un programa que sea capaz de intercambiar filas y columnas de una matriz cuadrada.
Se debe definir una matriz de 10 filas por 10 columnas que el programa llenará de forma
aleatoria con números entre 10 y 99 (ambos incluidos). Después de mostrar la matriz por
pantalla (con los números convenientemente alineados), el programa pedirá por teclado un
número de fila y un número de columna. Después intercambiará los valores de la fila y la
columna indicadas. Se debe mostrar por pantalla la matriz resultante.
Tanto los números de fila como los números de columna se deben indicar convenientemente
al mostrar la matriz original y la matriz resultado. La fila y columna intercambiada se debe
mostrar en color verde.

Author:  Jose Antonio Mayo Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Rotar Matriz</title>
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
    </style>
  </head>
  <body>
<?php
    //$minimo = 1000; //evaluo sobre numero superior al cualquiera de la matriz.
    //GENERO EL ARRAY Y LO LLENO DE NUMEROS ALEATORIOS.
    $tamano = 10;
    $filacol = $tamano - 1;
    $arrayMatrizNumeros = array();
    $arrayMatrizGirada = array();
    for ($i = 0; $i < $tamano; $i++){
      for ($j = 0; $j < $tamano; $j++){
        $num = rand(10,99); //generador de aleatorios.
        /*do {
          $num = rand(0,100);
          /*foreach($numeros as $fila){  //quito la comprobacion de numero unico (son 144)
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
        }while (!unico);*/
        $arrayMatrizNumeros[$i][$j] = $num; 
      }
    }
    //MUESTRO EL ARRAY
?>  
    <div>
    <table>
      <caption>Array aleatorio <?= $tamano ?> x <?= $tamano ?></caption>
<?php for ($f = 0; $f < $tamano; $f++){ ?>
      <tr>
  <?php for ($c = 0; $c < $tamano; $c++){ ?>
        <td><?= $arrayMatrizNumeros[$f][$c]?></td>
  <?php } ?>
      </tr> 
<?php } ?>
    </table>
    </div>
<?php  /*


      //GIRO EL ARRAY
     
      
      
      for ($capa = 0; $capa < ($tamano / 2); $capa++) {   //cada capa de la martriz a girar
      //bucle de giro a derecha (dos contadores, uno para el origen y otro para el destino)
         //muevo los 4 puntos singulares a sus esquinas correspondientes
      $arrayMatrizGirada[$capa][$capa] = $arrayMatrizNumeros[$capa + 1][$capa];
      $arrayMatrizGirada[$capa][$filacol - $capa] = $arrayMatrizNumeros[$capa][$filacol - 1 - $capa];
      $arrayMatrizGirada[$filacol - $capa][$filacol - $capa] = $arrayMatrizNumeros[$filacol - 1 - $capa][$filacol - $capa];
      $arrayMatrizGirada[$filacol - $capa][$capa] =  $arrayMatrizNumeros[$filacol - $capa][$capa + 1];
      
      for ($incremento = $capa; $incremento < $filacol - $capa; $incremento++){
        $arrayMatrizGirada[$capa][$incremento + 1] = $arrayMatrizNumeros[$capa][$incremento];
        $arrayMatrizGirada[$incremento + 1][$filacol - $capa] = $arrayMatrizNumeros[$incremento][$filacol - $capa];
        $arrayMatrizGirada[$filacol - $capa][$filacol - 1 - $incremento] = $arrayMatrizNumeros[$filacol - $capa][$filacol - $incremento];
        $arrayMatrizGirada[$filacol - 1 - $incremento][$capa] = $arrayMatrizNumeros [$filacol - $incremento][$capa];
      }
    }


*/
?>
    <div>
     <table>
      <caption>Array aleatorio girado</caption>
<?php for ($f = 0; $f < $tamano; $f++){ ?>
      <tr>
  <?php for ($c = 0; $c < $tamano; $c++){ ?>
        <td><?= $arrayMatrizGirada[$f][$c]?></td>
  <?php } ?>
      </tr> 
<?php } ?>
    </table>
    </div>
  </body>
</html>
