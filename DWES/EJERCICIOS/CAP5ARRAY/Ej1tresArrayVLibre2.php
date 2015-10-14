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
      
      $cantidadNumeros = 5; //cuantos numeros voy a pedir
      /*$cadenaNumero y $contadorNumeros deben ir fuera control del post porque si no 
      introduzco numerico, no toma el valor enviado por el formulario y se pierde el valor*/
      $cadenaNumero = test_input($_POST['cadenaNumero']);
      $contadorNumeros = test_input($_POST['contadorNumeros']);
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {  //compruebo exista post
        //echo "recibo un post";
        $iniciado = true;
        if (is_numeric($_POST['numero'])){
          $numero = test_input($_POST['numero']);  //testedo datos introducidos
          //$cadenaNumero = test_input($_POST['cadenaNumero']);
          //$contadorNumeros = test_input($_POST['contadorNumeros']);
          $contadorNumeros++;  //incremento  contador numeros introducidos
          $cadenaNumero .= $numero . "|";
          if ($contadorNumeros == $cantidadNumeros) {  //cuando llego a 20 hago los otros dos array
            $numNormal = explode("|", $cadenaNumero);
            foreach ($numNormal as $num){
              $cadenaCuadrado .=(pow($num , 2)) . "|";
              $cadenaCubo .=(pow($num , 3)) . "|";
            }
    ?>
      <table>
        <tr>
          <th>Numero</th>
          <th>Cuadrado</th>
          <th>Cubo</th>
        </tr>
    <?php
            for ($i = 0; $i < $cantidadNumeros; $i++){
              $numNormal2 = explode("|", $cadenaNumero);
              $numCuadrado = explode("|", $cadenaCuadrado);
              $numCubo = explode("|", $cadenaCubo);
    ?>
        <tr>
          <td><?= $numNormal2[$i] ?></td>
          <td><?= $numCuadrado[$i] ?></td>
          <td><?= $numCubo[$i] ?></td>
        </tr>
    <?php
            }
    ?>
      </table>
    <?php
          }
        } 
      }
      if (!$iniciado) {
        $contadorNumeros = 0;
        //echo "iniciado";
      }
      if ($contadorNumeros < $cantidadNumeros){
    ?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Introduzca un número:
        <input type="text" name ="numero" autofocus>
        <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros ?>">
        <input type="hidden" name="cadenaNumero" value="<?= $cadenaNumero ?>">
        <input type="submit" value="OK">
      </form>
      <p>Has introducido <?= $contadorNumeros ?> numeros</p>
    <?php
      }
      function test_input($data) {
        $data = trim($data);  //quito espacios en blanco delanteros y traseros
        $data = stripcslashes($data); //quito slash
        $data = htmlspecialchars($data);  //convierto < > en &lt y &lg, evito script malicioso
        return $data;
      }
    
    ?>
</body>
</html>