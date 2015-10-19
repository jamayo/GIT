<!DOCTYPE html>
<!--
Ejercicio 9
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa
pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es
menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de
la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.
Al final se debe mostrar el array resultante.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php
  $cantidadNumeros = 10; //cuantos numeros voy a pedir
  $contadorNumeros = $_POST['contadorNumeros'];
  $pideIndice = $_POST['pideIndice'];
  $iniciado = $_POST['iniciado'];
  $arrayNumeros = unserialize(base64_decode($_POST['arrayNumeros']));
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {  //compruebo exista post
    $iniciado = true;
    if (is_numeric($_POST['numero'])){
      $numero = test_input($_POST['numero']);  //testedo datos introducidos
      $arrayNumeros[$contadorNumeros] = $numero;
      $contadorNumeros++;  //incremento  contador numeros introducidos
      if ($contadorNumeros == $cantidadNumeros) {
?>
    <!-- PINTAR LOS DATOS INTRODUCIDOS EN ARRAY CON SUS INDICES -->
    <table border="1">
      <tr>
        <th>Array inicial</th>
        <th>Indice</th>
      </tr>
<?php
        for ($i = 0; $i < count($arrayNumeros); $i++){
?>
      <tr>
        <td align="center"><?= $arrayNumeros[$i] ?></td>
        <td align="center"><?= $i ?></td>
      </tr>
<?php 
        }
?>
    </table>
<?php
      $pideIndice = true; //AHORA PIDO LOS INDICES
      } //HE INTRODUCIDO TODOS LOS DATOS Y ESTOS SON VALIDOS.
      
    }  //COMPRUEBO VALIDEZ DE LOS CODIGOS.
    if ((is_numeric($_POST['inicio'])) && (is_numeric($_POST['final'])) && 
            ($_POST['inicio'] < $_POST['final']) && ($_POST['inicio'] >= 0) && 
            ($_POST['final'] <= 9))  {
      $posInicial = $_POST['inicio'];
      $posFinal = $_POST['final'];
      $pideIndice = false; //INDICES INTRODUCIDOS CORRECTOS, NO PRESENTO MAS EL FORMULARIO
      
      for ($c = ($posFinal-$posInicial); $c > 0; $c--){ //numero de veces que hago el bucle de movimiento
        $auxiliar = $arrayNumeros[count($arrayNumeros)-1]; //guardo el ultimo numero del array
        for ($i = count($arrayNumeros)-1; $i > 0; $i--){
          $arrayNumeros[$i] = $arrayNumeros[$i-1];
        }
        $arrayNumeros[0] = $auxiliar;
      }
 ?>
    <!-- PINTAR LOS DATOS INTRODUCIDOS EN ARRAY CON SUS INDICES -->
    <table border="1">
      <tr>
        <th>Array inicial</th>
        <th>Indice</th>
      </tr>
<?php
        for ($i = 0; $i < count($arrayNumeros); $i++){
?>
      <tr>
        <td align="center"><?= $arrayNumeros[$i] ?></td>
        <td align="center"><?= $i ?></td>
      </tr>
 <?php     
        }
?>
    </table>
<?php 
    } else { //INDICES NO INTRODUCIDOS O INCORRECTOS
      if($pideIndice) {
?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      Introduce la posición inicial y final (0-9) (posicion_inicial < posicion_final):
      <input type="text" name ="inicio" autofocus>
      <input type="text" name ="final">
      <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros ?>">
      <input type="hidden" name="arrayNumeros" value="<?= print base64_encode(serialize($arrayNumeros)) ?>">
      <input type="hidden" name="iniciado" value="<?= $iniciado ?>">
      <input type="hidden" name="pideIndice" value="<?= $pideIndice ?>">
      <input type="submit" value="OK">
    </form>
<?php
      }

      } // INTRODUZCO INDICES Y COMPRUEBO SU VALIDEZ, SI ES CORRECTO MUESTRO EL ARRAY MODIFICADO
  } //INICIALIZACION VARIABLES
  if (!$iniciado) {
    $contadorNumeros = 0;
    //$pideIndice = false;
    echo "iniciado";
  }
  if ($contadorNumeros < $cantidadNumeros){
    //FORMULARIO INTRODUCCION NUMEROS
?>  
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      Introduzca un número:
      <input type="text" name ="numero" autofocus>
      <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros ?>">
      <input type="hidden" name="arrayNumeros" value="<?= print base64_encode(serialize($arrayNumeros)) ?>">
      <input type="hidden" name="iniciado" value="<?= $iniciado ?>">
      <input type="hidden" name="pideIndice" value="<?= $pideIndice ?>">
      <input type="submit" value="OK">
    </form>
    <p>Has introducido <?= $contadorNumeros ?> numeros</p>
<?php
  } // BUCLE FORMULARIO HASTA CARGAR X NUMEROS
  function test_input($data) {
    $data = trim($data);  //quito espacios en blanco delanteros y traseros
    $data = stripcslashes($data); //quito slash
    $data = htmlspecialchars($data);  //convierto < > en &lt y &lg, evito script malicioso
    return $data;
  } //TESTEO DE DATOS INTRODUCIDOS
?>   
  </body>
</html>
