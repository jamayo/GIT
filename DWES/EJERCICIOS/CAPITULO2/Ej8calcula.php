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
      echo "El salario semanal con ", $_GET['horas'], " trabajadas a 12 euros la hora es: ",
              $_GET['horas'] * 12;
      ?>
    <br>que tengas un buen día.
  </body>
</html>
