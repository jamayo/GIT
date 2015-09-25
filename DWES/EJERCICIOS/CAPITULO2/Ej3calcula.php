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
    Hola, 
      <?php 
      
      //echo $_GET['pesetas'], " pesetas son ", $_GET['pesetas'] / 166.386,  " euros" 
      echo $_GET['pesetas'], " pesetas son ", number_format(($_GET['pesetas'] / 166.386),2),  " euros" 
              
      ?>
    <br>que tengas un buen día.
  </body>
</html>
