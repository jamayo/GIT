<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $hueco = (9+1)/2; //en funcion de la base
    $posicion = 1;
    for($i = 1; $i <= (9+1)/2; $i++){  //asi hago el bucle en funcion de la base
      for($ancho = $hueco; $ancho > 1; $ancho--) {  //pinto huecos
        echo "&nbsp;";
      }
      $numero = $posicion * 2 + 1;
      for($pintaasterisco = 1; $pintaasterisco <= $numero; $pintaasterisco++ ){
        echo "*";
      }
      $posicion++;
      echo "<br>";
    }
    
    ?>
  </body>
</html>
