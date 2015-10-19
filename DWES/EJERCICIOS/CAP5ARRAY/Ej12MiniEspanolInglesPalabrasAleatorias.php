<!DOCTYPE html>
<!--
Ejercicio 11
Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.

no acepta caracteres especiales como ñ, o vocales acentuadas.... las toma como acertadas.

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
                          "rosa" => "pink",         "viejo" => "old",
                          "siete" => "seven",       "amigo" => "friend",
                          "verde" => "green",       "novia" => "girlfriend",
                          "hijo" => "son",          "hija" => "sister",
                          "padre" => "father",      "telefono" => "phone",
                          "ordenador" => "computer","carne" => "meat",
                          "mesa" => "table",        "Silla" => "chair",
                          "habitacion" => "room",   "cama" => "bed",
                          "caballo" => "horse",     "perro" => "dog",
                          "gato" => "cat",          "plato" => "dish",
                          "reloj" => "clock",       "puerta" => "door",
                          "casa" => "house",        "avion" => "plane",
                          "helicoptero" => "helicopter",   "raton" => "mouse",
                          "pez" => "fish",          "lapiz" => "pen",
                          "dinero" => "money",      "llave" => "key",
                          "rojo" => "red",          "verde" => "green",
                          "amarillo" => "yellow",   "naranja" => "orange",
                          "negro" => "black",       "hombre" => "man",
                          "foto" => "photo",
                          );
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $iniciado = true;
      $reiniciado = ($_POST['reiniciado']);
      $palabraIngles = strtolower ($_POST['palabraIngles']);
      $palabraEspanol = strtolower ($_POST['palabraEspanol']);
      $acierto = ($_POST['acierto']);
      $error = ($_POST['error']);
      $traduce = ($_POST['traduce']);
      $adios = ($_POST['adios']);
      if ($traduce){
        $pidoPalabra = true;
        if(($diccionario[$palabraEspanol]) == $palabraIngles) {
          echo "Has acertado la traducción";
          $acierto++;
        } else {
          echo "No has acertado la traducción, la respuesta es : " . $diccionario[$palabraEspanol];   
          $error++; 
        }
        if (($acierto + $error) == 5){
          echo "<br><br>Has conseguido " . $acierto . " aciertos y " . $error . " errores";
        }
      }
    } // BUCLE SI RECIBO UN POST
    
  if ((!$iniciado)||($reiniciado)) {
    $pidoPalabra = true;
    $acierto = 0;
    $error = 0;
  }//FUNCION INICIADO 
  
?>  <!-- FORMULARIO ÚNICO -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<?php
    if (($pidoPalabra) && ($acierto + $error) < 5) {
      $palabra = array_rand($diccionario, 1);
?>    <!--INTRODUCE UNA PALABRA Y LA TRADUZCO -->
      <br>Te faltan <?= 5 - $acierto - $error ?> palabras
      <br>Dime la traducción en ingles de <?= $palabra ?>
      <input type="text" name ="palabraIngles" autofocus>
      <input type="hidden" name="palabraEspanol" value="<?= $palabra ?>">
      <input type="hidden" name="traduce" value=1> <!--envio un true-->
      <input type="hidden" name="acierto" value="<?= $acierto ?>">
      <input type="hidden" name="error" value="<?= $error ?>">
      <input type="submit" value="COMPROBAR">
<?php
    }
    if (($acierto + $error) == 5) {
?>
      <br>¿Quieres jugar de nuevo?;
      <button name="reiniciado" type="submit" value=1>Si</button>
      <button name="adios" type="submit" value=1>No</button>
    </form>
<?php
    } 
    if ($adios) {
      echo "Gracias por usar nuestro diccionario";
    } 
?>
  </body>
</html>
