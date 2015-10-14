<!DOCTYPE html>
<!--
Ejercicio 4
Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php
  $cantidadNumeros = 100; //cuantos numeros voy a pedir
  $rangoinferior = 0;
  $rangosuperior = 20;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {  //HA HABIDO POST
    if ((is_numeric($_POST['numero1'])) && (is_numeric($_POST['numero2']))) {
      $numero1 = test_input($_POST['numero1']);  //testedo datos introducidos
      $numero2 = test_input($_POST['numero2']);
    }
    $arrayNumeros = unserialize(base64_decode($_POST['arrayNumeros']));
    echo "Cambiamos el número " . $numero1 . " por el número " . $numero2;
    echo "<br><br>Array inicial <br>";
    foreach ($arrayNumeros as $num){
      echo $num . " ";
    }
    echo "<br><br>Array modificado<br>";
    foreach ($arrayNumeros as $num){  //muestro los valores del array con espacios
      if ($num == $numero1){
        echo '<span><font color="red">' . $numero2 . ' </font></span>';
      } else {
        echo $num . " ";
      }
    } 
  } else { //NO HA HABIDO POST
    for ($i = 0; $i < $cantidadNumeros; $i++){ //creamos array con numeros aleatorios
      $arrayNumeros[$i] = rand($rangoinferior, $rangosuperior);
    }
    foreach ($arrayNumeros as $num){  //muestro los valores del array con espacios
      echo $num . " ";
    }
    echo "<br><br>";
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      Introduzca número que desea modificar:
      <input type="text" name ="numero1" autofocus>
      Introduzca por qué número cambiarlo:
      <input type="text" name ="numero2" >
      <input type="hidden" name="arrayNumeros" value="<?= print base64_encode(serialize($arrayNumeros)) ?>">
      <input type="hidden" name="iniciado" value="<?= $iniciado ?>">
      <input type="submit" value="OK">
    </form>
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
