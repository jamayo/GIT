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
    <?php echo $_GET['euros'], " euros son ", number_format(($_GET['euros'] * 166.386),0), " pesetas" ?>
    <br>que tengas un buen día.
  </body>
</html>
