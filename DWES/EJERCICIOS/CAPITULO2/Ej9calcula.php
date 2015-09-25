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
      echo "El volumen de un cono de radio ", $_GET['radio'], " y altura ",
              $_GET['altura'], " es: ", M_PI *  pow($_GET['radio'], 2) * $_GET['altura'] / 3;
      ?>
    <br>que tengas un buen día.
  </body>
</html>
