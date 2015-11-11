<?php  // GRABO LAS PALABRAS EN LAS COOKIES
    if (!empty($_POST["spanish"])) {
      $spanish = strtolower($_POST["spanish"]);
      $english = strtolower($_POST["english"]);
      setcookie("diccionario[$spanish]", $english, time() + 3*24*3600);
    } 
?>

<!DOCTYPE html>
<!--
Ejercicio 11
Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.

no acepta caracteres especiales como ñ, o vocales acentuadas.... las toma como acertadas.

Ejercicio 8
Realiza un programa que escoja al azar 5 palabras en inglés de un mini-diccionario. El programa
pedirá que el usuario teclee la traducción al español de cada una de las palabras y comprobará si son
correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas y cuántas erróneas.
La aplicación debe tener una opción para introducir los pares de palabras (inglés - español) que se
deben guardar en cookies; de esta forma, si de vez en cuando se dan de alta nuevas palabras, la
aplicación puede llegar a contar con un número considerable de entradas en el mini-diccionario.

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
                          "mesa" => "table",        "silla" => "chair",
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
    
    //BUCLE RECUPERACION DICCIONARIO EN COOKIE E INTRODUCCION EN ARRAY ASOCIATIVO
    if (isset($_COOKIE['diccionario'])) {
      $diccionarioCookie = array(); //reinicializo cada vez para cargar valores nuevos
      foreach ($_COOKIE['diccionario'] as $name => $value) {
          $name = htmlspecialchars($name);
          $value = htmlspecialchars($value);
          //$diccionarioCookie[] = $name;
          $diccionarioCookie[$name] = $value;
      }
    }
   
 /*   //visualizar diccionario cookie
    foreach ($diccionarioCookie as $sp => $en) {
          $sp = htmlspecialchars($sp);
          $en = htmlspecialchars($en);
          echo "espanol: " . $sp . " ingles: " . $en;
          
      }*/
    
    //RECOJO VALORES DE TODAS LAS VARIABLES ENVIADAS POR POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['iniciado'])) {
        $iniciado = $_POST['iniciado'];
      } else {
        $iniciado = true;
      }
      $reiniciado = ($_POST['reiniciado']);
      $palabraIngles = strtolower ($_POST['palabraIngles']);
      $palabraEspanol = strtolower ($_POST['palabraEspanol']);
      $acierto = ($_POST['acierto']);
      $error = ($_POST['error']);
      $traduce = ($_POST['traduce']);
      $mejorar = ($_POST['mejorar']);
      $introducir = ($_POST['introducir']);
      $adios = ($_POST['adios']);
    } // BUCLE SI RECIBO UN POST
    
    //BUCLE FIN DE PROGRAMA
    if ($adios) {
      $pidoPalabra = false;
      $traduce = false;
      //setcookie("diccionario*", NULL, -1);
      unset($diccionarioCookie);
      echo "Gracias por usar nuestro diccionario";
    } 
    //BUCLE TRADUCTOR
    if ($traduce){
      $pidoPalabra = true;
      if (array_key_exists($palabraEspanol, $diccionario)){
        if ($diccionario[$palabraEspanol] == $palabraIngles) {
          $acierto++;
        } else {
          echo "No has acertado la traducción, la respuesta es : " . $diccionario[$palabraEspanol];   
          $error++; 
        }
      } else {  //si no esta en diccionario busco en diccionarioCokies
        if ($diccionarioCookie[$palabraEspanol] == $palabraIngles ){
          $acierto++;
        } else {  
          echo "No has acertado la traducción, la respuesta es : " . $diccionarioCookie[$palabraEspanol];   
          $error++;
        }
      }
    }
    //BUCLE MENSAJE RESULTADO JUEGO
    if (($acierto + $error) == 5){
      echo "<br><br>Has conseguido " . $acierto . " aciertos y " . $error . " errores";
    }
 
    //BUCLE REINICIO PROGRAMA
    if (!$iniciado) {
      $pidoPalabra = true;
      $acierto = 0;
      $error = 0;
    }
  
?>  <!-- FORMULARIO ÚNICO -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<?php
    if (($pidoPalabra) && ($acierto + $error) < 5) {
      if (rand(1, 5) != 1){  // una entre cinco tomará una palabra del diccionarioCookie.
        $palabra = array_rand($diccionario, 1);
      } else {
        if (!empty ($diccionarioCookie)){  //SI TIENE DATOS cookie LO USO
          $palabra = array_rand($diccionarioCookie, 1);
        } else {
          $palabra = array_rand($diccionario, 1);
        }
      }
      
?>    <!--INTRODUCE UNA PALABRA Y LA TRADUZCO -->
      <br>Dime la traducción en ingles de <?= $palabra ?>
      <input type="text" name ="palabraIngles" autofocus>
      <input type="hidden" name="palabraEspanol" value="<?= $palabra ?>">
      <input type="hidden" name="traduce" value=1> <!--envio un true-->
      <input type="hidden" name="acierto" value="<?= $acierto ?>">
      <input type="hidden" name="error" value="<?= $error ?>">
      <input type="submit" value="COMPROBAR">
      <button name="adios" type="submit" value=1>Salir</button>
      <br>Te faltan <?= 5 - $acierto - $error ?> palabras
<?php  
    }//MENU QUIERES JUGAR DE NUEVO
    if (($acierto + $error) == 5 || ($reiniciado)) {
      $reiniciado = false;
      $introducir = false;
?>     
      <br>¿Quieres jugar de nuevo?
      <button name="iniciado" type="submit" value=0>Si</button>
      <button name="mejorar" type="submit" value=1>No</button>
    
<?php
    } //MENU CONSULTA INTRODUCIR PALABRAS EN COOKIES
    if ($mejorar) {
      echo "Quieres mejorar nuestro diccionario?";
?>
      <button name="introducir" type="submit" value=1>Si</button>
      <button name="adios" type="submit" value=1>No</button>
<?php      
    } 
    //MENU INTRODUCIR PALABRAS EN COOKIES
    if ($introducir) {
      echo "Introduce la palabra en español y su traducción en inglés:<br>";
?>
      Español:&nbsp;<input type="text" name="spanish">&nbsp;
      Inglés:&nbsp;<input type="text" name="english">&nbsp;
      <input type="submit" value="Grabar">
      <input type="hidden" name="introducir" value=1>
      <button name="reiniciado" type="submit" value=1>Atras</button> <!-- true -->
    </form>
<?php      
    } 
?>
  </body>
</html>
