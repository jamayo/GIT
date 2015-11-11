
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
      <meta charset="UTF-8">
      <title>Ex11mgc4</title>
      <style type="text/css">
          td {
            border: 1px solid black;
            height: 20px;
            width: 40px;
            text-align: center;
          }
                   
      </style>
  </head>
    <body>
                    
      <?php
      $numMaximo = 100;
      $filaMax;
      $columnaMax;
      
      
      //Relleno la tabla
      for ($i = 0; $i < 8; $i++) {
        for($j = 0; $j < 8; $j++) {
          $arrayNum [$i][$j]= rand(100, 300);
        }
      }
//      //Imprimo la tabla tal y como se ha creado
//      echo "<table>";
//      for ($i = 0; $i < 8; $i++) {
//        echo "<tr>";
//        for($j = 0; $j < 8; $j++) {
//          echo "<td>", $arrayNum [$i][$j], "</td>";
//        }
//        echo "</tr>";  
//      }
//      echo "</table>";
      
      //Busco en el array cual es el máximo y que posición ocupa
      for ($i = 0; $i < 8; $i++) {
        for($j = 0; $j < 8; $j++) {
          if ($arrayNum [$i][$j] > $numMaximo) {
            $numMaximo = $arrayNum [$i][$j];
            $filaMax = $i;    //Posición de máximo
            $columnaMax = $j; //Posición del máximo
          }
        }
      }
      echo "NUMERO MINIMO :", $numMaximo, "<br>";
      echo "FILA MINIMO :", $filaMax, "<br>";
      echo "COLUMNA MINIMO :", $columnaMax, "<br>";
      
      //Imprimo la tabla con los cercanos en negrita
      echo "<table>";
      for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        for($j = 0; $j < 8; $j++) {
          if ((abs($i - $filaMax) <= 1) && (abs($j - $columnaMax) <= 1)) {
          echo "<td><b>", $arrayNum [$i][$j], "<b></td>";  
          }else{
          echo "<td>", $arrayNum [$i][$j], "</td>";
          }
        }
        echo "</tr>";  
      }
      echo "</table>";
      
      
      for ($i = 0; $i < 8; $i++) {
        for($j = 0; $j < 8; $j++) {
          if ((abs($i - $filaMax) <= 1) &&(abs($j - $columnaMax) <= 1)) {
            
          }
            
        }
      }

      
      
      ?>

    </body>
</html>