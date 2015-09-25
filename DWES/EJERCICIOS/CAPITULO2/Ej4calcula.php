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
      echo "La suma de: ", $_GET['num1'], " + " , $_GET['num2'], " es: ", $_GET['num1'] + $_GET['num2'], "<br>
      La resta de: ", $_GET['num1'], " - " , $_GET['num2'], " es: ", $_GET['num1'] - $_GET['num2'], "<br>
      La multiplicación de: ", $_GET['num1'], " * " , $_GET['num2'], " es: ", $_GET['num1'] * $_GET['num2'], "<br>
      La división de: ", $_GET['num1'], " / " , $_GET['num2'], " es: ", $_GET['num1'] / $_GET['num2'];
     

      ?>
    <br>que tengas un buen día.
  </body>
</html>
