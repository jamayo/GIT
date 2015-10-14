<!DOCTYPE html>
<!--
Ejercicio 1
Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
los tres arrays dispuesto en tres columnas.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php
      $numero = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
      $cuadrado = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
      $cubo = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
      for ($i = 0; $i < 100; $i++){
        $numero[$i] = rand(0, 100);
      }   
      for ($i = 0; $i < count($numero); $i++){
        $cuadrado[$i] = pow($numero[$i] , 2);
        $cubo[$i] = pow($numero[$i] , 3);
      }        
?>
    <table>
      <tr>
        <th>Orden</th> <!--para contar los números que genero -->
        <th>Numero</th>
        <th>Cuadrado</th>
        <th>Cubo</th>
      </tr>
<?php
      for ($i = 0; $i < count($numero); $i++){
?>
      <tr>
        <td><?= $i + 1 ?></td>
        <td><?= $numero[$i] ?></td>
        <td><?= $cuadrado[$i] ?></td>
        <td><?= $cubo[$i] ?></td>
      </tr>
<?php
      }
?>
    </table>
  </body>
</html>