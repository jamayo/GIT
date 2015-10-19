<!DOCTYPE html>
<!--
Ejercicio 15
Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición
en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener
números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz
resultado, ambas con los números convenientemente alineados.

Author: Jose A. Mayo Mayo
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
        height: 10px;
        text-align: right;
        padding: 5px;
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
    $tamano = 12;
    $filacol = $tamano - 1;
    $arrayMatrizNumeros = array();
    $arrayMatrizGirada = array();
    for ($i = 0; $i < 12; $i++){
      for ($j = 0; $j < 12; $j++){
        $num = rand(0,100); //generador de aleatorios.
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
      <caption>Array aleatorio 12 x 12</caption>
<?php for ($f = 0; $f < 12; $f++){ ?>
      <tr>
  <?php for ($c = 0; $c < 12; $c++){ ?>
        <td><?= $arrayMatrizNumeros[$f][$c]?></td>
  <?php } ?>
      </tr> 
<?php } ?>
    </table>
    </div>
<?php 


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



?>
    <div>
     <table>
      <caption>Array aleatorio girado</caption>
<?php for ($f = 0; $f < 12; $f++){ ?>
      <tr>
  <?php for ($c = 0; $c < 12; $c++){ ?>
        <td><?= $arrayMatrizGirada[$f][$c]?></td>
  <?php } ?>
      </tr> 
<?php } ?>
    </table>
    </div>
  </body>
</html>
