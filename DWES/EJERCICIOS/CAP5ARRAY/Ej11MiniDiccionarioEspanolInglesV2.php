<!DOCTYPE html>
<!--
Ejercicio 11
Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.

Version 2. agrupo los menus en un unico <form>

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
      $iniciado = true;
      $palabraIntroducida = strtolower ($_POST['palabra']);
      $pidoLista = ($_POST['pidoLista']);
      $otraPalabra = ($_POST['otraPalabra']);
      $pidoPalabra = ($_POST['pidoPalabra']);
      $muestroLista = ($_POST['muestroLista']);
      $traduce = ($_POST['traduce']);
      echo "<br>variables recibidas por el form <br><br>";
      echo "palabra introducida : " . $palabraIntroducida . "<br>";
      echo "pidoLista: " . $pidoLista . "<br>";
      echo "pidoPalabra :" . $pidoPalabra . "<br>";
      echo "muestroLista: " . $muestroLista . "<br>";
      echo "traduce:  " . $traduce . "<br><br>";
      
      if ($traduce){
        $pidoPalabra = false;
        $traduce = false;
        if(($diccionario[$palabraIntroducida]) != "") {
          echo "La traducción al inglés de " . $palabraIntroducida . " es  " . $diccionario[$palabraIntroducida];
          $otraPalabra = true;
        } else {
          echo "no tenemos esa palabra en el diccionario";   
          $pidoLista = true; 
        }
      }
      if ($muestroLista) {
        $pidoLista = false;
        $muestroLista = false;
        //$pidoPalabra = true;
        //$pidoPalabra = true;
        $otraPalabra = true;
        //$respuesta = "no";
        echo "Las palabras que puedo traducir son: <br>";
        foreach ($diccionario as $indice => $traduccion){
          echo $indice . ", ";
        }
      } else {
      
      }
    } // BUCLE SI RECIBO UN POST
   
    //FUNCION INICIADO 
  if (!$iniciado) {
    $pidoPalabra = true;
    echo "if iniciado valor pidoPalabra: ". $pidoPalabra . "<br>";
    //$traduce = false;
    echo "iniciado";
  }
  
      echo "<br>variables entregadas al form <br><br>";
      echo "palabra introducida : " . $palabraIntroducida . "<br>";
      echo "pidoLista: " . $pidoLista . "<br>";
      echo "otraPalabra" . $otraPalabra . "<br>";
      echo "pidoPalabra :" . $pidoPalabra . "<br>";
      echo "muestroLista: " . $muestroLista . "<br>";
      echo "traduce:  " . $traduce . "<br><br>";
?>    
     <!-- FORMULARIO ÚNICO -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<?php
    if ($pidoPalabra) {
        $pidoPalabra = false;
        $traduce = true;
?>      
      <!--INTRODUCE UNA PALABRA Y LA TRADUZCO -->
      <br>Introduce una palabra en español y te mostraré la traducción
      <input type="text" name ="palabra" autofocus>
      <input type="hidden" name="traduce" value="<?= $traduce ?>">
      
      <input type="hidden" name="pidoPalabra" value="<?= $pidoPalabra ?>">
      <input type="hidden" name="otraPalabra" value="<?= $otraPalabra ?>">
      <input type="hidden" name="pidoLista" value="<?= $pidoLista ?>">
      <input type="hidden" name="muestroLista" value="<?= $muestroLista ?>">
      
      <input type="submit" value="TRADUCIR">
<?php
    }
    if ($otraPalabra) {
      $otraPalabra = false; 
      
?>
      <!--QUIERES TRADUCIR OTRA PALABRA? -->
      <br>¿Quieres traducir otra palabra al inglés?
      <button name="pidoPalabra" type="submit" value=1>Si</button>
      <button name="pidoPalabra" type="submit" value=0>No</button>
      
      <input type="hidden" name="otraPalabra" value="<?= $otraPalabra ?>">
      <input type="hidden" name="pidoLista" value="<?= $pidoLista ?>">
      <input type="hidden" name="muestroLista" value="<?= $muestroLista ?>">
<?php
    } 
    if ($pidoLista){
?>
      <!--QUIERES QUE TE MUESTRE LAS PALABRAS QUE PUEDO TRADUCIR? -->
      <br>Quieres te muestre las palabras que puedo traducir?
      <button name="muestroLista" type="submit" value=1>Si</button>
      <button name="muestroLista" type="submit" value=0>No</button>
      
      <input type="hidden" name="pidoPalabra" value="<?= $pidoPalabra ?>">
      <input type="hidden" name="otraPalabra" value="<?= $otraPalabra ?>">
      <input type="hidden" name="pidoLista" value="<?= $pidoLista ?>">
<?php
    }
?>
      <!--VARIABLES HIDDEN
      <input type="hidden" name="pidoPalabra" value="<?= $pidoPalabra ?>">
      <input type="hidden" name="otraPalabra" value="<?= $otraPalabra ?>">
      <input type="hidden" name="pidoLista" value="<?= $pidoLista ?>">
      <input type="hidden" name="muestroLista" value="<?= $muestroLista ?>">
      -->
    </form>
  </body>
</html>
