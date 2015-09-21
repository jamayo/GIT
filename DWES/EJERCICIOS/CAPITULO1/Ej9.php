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
      $peseta = 1000; 
      $conversion = 166.386;
      echo "CONVERSOR DE MONEDA DE EUROS A PESETAS:
            <br>Cantidad a convertir es:", $peseta, "  pesetas
            <br>Que son: ", $peseta / $conversion, " euros";         
    ?>
  </body>
</html>
