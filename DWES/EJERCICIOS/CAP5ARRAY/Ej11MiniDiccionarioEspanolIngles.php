<!DOCTYPE html>
<!--
Ejercicio 11
Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.

Author: Jose A. Mayo Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php

    $aleatorio = array();//INICIALIZO ARRAY
    $diccionario = array(
                          "gracias" => "thanks",    "semana" => "week",
                          "pequeño" => "small",     "viejo" => "old",
                          "siete" => "seven",       "amigo" => "friend",
                          "verde" => "green",       "novia" => "girlfriend",
                          "hijo" => "son",          "hija" => "sister",
                          "padre" => "father",      "telefono" => "phone",
                          "ordenador" => "computer","carne" => "meat",
                          "mesa" => "table",        "Silla" => "chair",
                          "habitación" => "room",   "cama" => "bed",
                          "caballo" => "horse",     "perro" => "dog",
                          "gato" => "gato",         "plato" => "dish",
                          "reloj" => "clock",       "puerta" => "door",
                          "casa" => "house",        "avion" => "plane",
                          "helicoptero" => "helicopter",   "ratón" => "mouse",
                          "pez" => "fish",          "lapiz" => "pen",
                          "dinero" => "money",      "llave" => "key",
                          "rojo" => "red",          "verde" => "green",
                          "amarillo" => "yellow",   "naranja" => "orange",
                          "negro" => "black",       "hombre" => "men",
                          "foto" => "photo",
                          );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $palabraIntroducida = strtolower ($_POST['palabra']);
      $respuesta = ($_POST['respuesta']);
      $otraPalabra = ($_POST['otraPalabra']);
      $pidoPalabra = ($_POST['pidoPalabra']);
      $pidoLista = ($_POST['pidoLista']);
      
      if (($diccionario[$palabraIntroducida]) != "") {
        echo "La traducción al inglés de " . $palabraIntroducida . " es  " . $diccionario[$palabraIntroducida];
        $otraPalabra = true;
      } else {
        echo "no tenemos esa palabra en el diccionario";   
        $pidoLista = true; 
     
      }
      if ($respuesta == "si") {
        $pidoPalabra = true;
        $otraPalabra = false;
        $respuesta = "no";
        echo "Las palabras que puedo traducir son: <br>";
        foreach ($diccionario as $indice => $traduccion){
          echo $indice . ", ";
        }
       
      }


      
    }
      //MENUS
      if (($pidoPalabra) || ($_SERVER["REQUEST_METHOD"] != "POST")){ //PIDE PALABRA Y TRADUZCO
        $pidoPalabra = false;
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <br>Introduce una palabra en español y te mostraré la traducción
      <input type="text" name ="palabra" autofocus>
      
      <input type="submit" value="TRADUCIR">
    </form>
<?php
    }
    if ($otraPalabra) { //OTRA PALABRA? PIDE PALABRA Y TRADUZCO
      $pidoPalabra = true;
      $otraPalabra = false;
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <br>¿Quieres traducir otra palabra al inglés?
      <input type="submit" name="otrapalabra" value="si">
      <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros ?>">
      <input type="submit" name="otrapalabra" value="no">
    </form>
<?php
    }
    if ($pidoLista) { //QUIERES QUE TE MUESTRE EL DICCIONARIO
      $pidoLista = false;
      $pidoPalabra = true;
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <br>Quieres te muestre las palabras que puedo traducir?
      <input type="submit" name ="respuesta" value = "si" autofocus>
      <input type="submit" name ="respuesta" value = "no">
    </form>
<?php
    }
?>
    

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
     
      <!--INTRODUCE UNA PALABRA Y LA TRADUZCO -->
      <br>Introduce una palabra en español y te mostraré la traducción
      <input type="text" name ="palabra" autofocus>
      <input type="submit" value="TRADUCIR">
      
      <!--INTRODUCE UNA PALABRA Y LA TRADUZCO -->
      
      <br>Quieres te muestre las palabras que puedo traducir?
      <input type="submit" name ="respuesta" value = "si" autofocus>
      <input type="submit" name ="respuesta" value = "no">
    </form>



  </body>
</html>
