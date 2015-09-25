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
    Hola, <br>
      <?php 
      //echo "Calculo de factura: <br>Base imponible: ", $_GET['base'], "<br>IVA 21%: ",
      //        $_GET['base'] * 21 / 100, "<br>Total factura: ", $_GET['base'] + $_GET['base'] * 21 / 100;
      echo "Calculo de factura: <br>Base imponible: ", $_GET['base'], "<br>IVA 21%: ",
              number_format(($_GET['base'] * 21 / 100),2), 
              "<br>Total factura: ", number_format(($_GET['base'] + $_GET['base'] * 21 / 100),2);
      
      ?>
    <br>que tengas un buen día.
  </body>
</html>
