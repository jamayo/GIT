<!DOCTYPE html>
<!--
Ejercicio 11
Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.

Version 3. agrupo los menus en un unico <form> (no envio los booleanos en el formulario
ocultos ya si no los hago ya se se envian como "0" o false. solo los que deban ser true.
pero la mayoria de los true son enviados por el mismo formulario al pulsar el boton.
OTRO DETALLE, en las preguntas SI/NO, uso el SI para llamar al condicional requerido y 
el NO para llamar a otro condicional totalmente distinto (RTTDTT)

Author: Jose A. Mayo Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php
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
      $adios = ($_POST['adios']);
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
        $otraPalabra = true;
        echo "Las palabras que puedo traducir son: <br>";
        foreach ($diccionario as $indice => $traduccion){
          echo $indice . ", ";
        }
      } 
    } // BUCLE SI RECIBO UN POST
  if (!$iniciado) {
    $pidoPalabra = true;
  }//FUNCION INICIADO 
?>  <!-- FORMULARIO ÚNICO -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<?php
    if ($pidoPalabra) {
?>    <!--INTRODUCE UNA PALABRA Y LA TRADUZCO -->
      <br>Introduce una palabra en español y te mostraré la traducción
      <input type="text" name ="palabra" autofocus>
      <input type="hidden" name="traduce" value=1> <!--envio un true-->
      <input type="submit" value="TRADUCIR">
<?php
    } 
    if ($otraPalabra) {
?>    <!--QUIERES TRADUCIR OTRA PALABRA? -->
      <br>¿Quieres traducir otra palabra al inglés?
      <button name="pidoPalabra" type="submit" value=1>Si</button>
      <button name="adios" type="submit" value=1>No</button>
<?php
    }
    if ($pidoLista){
?>    <!--QUIERES QUE TE MUESTRE LAS PALABRAS QUE PUEDO TRADUCIR? -->
      <br>Quieres te muestre las palabras que puedo traducir?
      <button name="muestroLista" type="submit" value=1>Si</button>
      <button name="otraPalabra" type="submit" value=1>No</button>
 
<?php
    } 
    if ($adios) {
      echo "Gracias por usar nuestro diccionario";
    } 
?>
    </form>
  </body>
</html>
