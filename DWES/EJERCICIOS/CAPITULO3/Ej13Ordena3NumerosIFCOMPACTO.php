<!DOCTYPE html>
<!--
Escribe un programa que ordene tres números enteros introducidos por teclado.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
      <span>Introduce los numeros a ordenar</span><br><br>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <span>número 1&nbsp</span><input type="text" name="numero1"><br><br>
        <span>número 2&nbsp</span><input type="text" name="numero2"><br><br>
        <span>número 3&nbsp</span><input type="text" name="numero3"><br><br>
        <input type="submit" value="Ordenar"><br><br>
      </form>
    
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {   //si he pulsado boton del form
          $numero1 = $_REQUEST['numero1'];
          $numero2 = $_REQUEST['numero2'];
          $numero3 = $_REQUEST['numero3'];
          if (!is_numeric($numero1 . $numero2 . $numero3 )){
            echo "No has introducido tres numeros";
          } else {  //evaluo el numero introducido
            ($numero1 >= $numero2)?(($numero1 >= $numero3)?(($numero2 >= $numero3)?
              "Los numeros ordenados de mayor a menor son: " . $numero1 . ", " . $numero2 . ", " . $numero3:
              "Los numeros ordenados de mayor a menor son: " . $numero1 . ", " . $numero3 . ", " . $numero2:
              "Los numeros ordenados de mayor a menor son: " . $numero3 . ", " . $numero1 . ", " . $numero2):
              (($numero2 >= $numero3)?(($numero3 >= $numero1)?
                    "Los numeros ordenados de mayor a menor son: " . $numero2 . ", " . $numero3 . ", " . $numero1:
              "Los numeros ordenados de mayor a menor son: " . $numero2 . ", " . $numero1 . ", " . $numero3:
              "Los numeros ordenados de mayor a menor son: " . $numero3 . ", " . $numero2 . ", " . $numero1;
            } 
          }
        
      ?>   
  </body>
</html>