<!DOCTYPE html>
<!--
Ejercicio 3
Queremos gestionar la venta de entradas (no numeradas) de Expocoches Campanillas que tiene
3 zonas, la sala principal con 1000 entradas disponibles, la zona de compra-venta con 200 entradas
disponibles y la zona vip con 25 entradas disponibles. Hay que controlar que existen entradas
antes de venderlas. Define las clase Zona con sus atributos y métodos correspondientes y crea
un programa que permita vender las entradas. En la pantalla principal debe aparecer información
sobre las entradas disponibles y un formulario para vender entradas. Debemos indicar para qué
zona queremos las entradas y la cantidad de ellas. Lógicamente, el programa debe controlar que no
se puedan vender más entradas de la cuenta.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
   <!DOCTYPE html>
<?php
  include_once 'Zona.php';


  $principal = new Zona("zona Principal", 1000);
  $compraventa = new Zona("zona Compra-venta", 200);
  $vip = new Zona("zona V.I.P.", 25);

  echo $principal;
  echo $compraventa;
  echo $vip;
?>
  
  
  
  
</body>

</html>
