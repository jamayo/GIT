<?php
    
    if (isset($_POST["color"])) { //si existe el post, toma el POST
      setcookie("color", $_POST["color"], time() + 3*24*3600);
      $color = $_POST["color"];
    } else {  //si no existe el post, reviso si existe la COOKIE
      if( isset($_COOKIE["color"])) {
      $color = $_COOKIE["color"];
      }
    }
    
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cambio el color de fondo</title>
    <style>
      body {
        background-color: <?= $color; ?>;
      }
    </style>
  </head>
  <body>
    <form action="#" method="post">
      Color: <input type="text" name ="color" autofocus="autofocus"><br>
      <input type="submit" value="Aceptar">
    </form>
    <form action="#" method="post">
      Color: <input type="color" name ="color" autofocus="autofocus"><br>
      <input type="submit" value="Aceptar">
    </form>
  </body>
</html>
<!--
Ejercicio 7
Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de
una página. Esta página debe tener únicamente algo de texto y un formulario para cambiar el color.

Author: Jose A. Mayo
-->