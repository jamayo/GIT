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
      echo "El área del triángulo de base ", $_GET['base'], " y altura " , $_GET['altura'],
           " es: ", $_GET['base'] * $_GET['altura'] / 2 , " m2<br>";
      ?>
    <br>que tengas un buen día.
  </body>
</html>
