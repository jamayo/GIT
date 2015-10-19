<!DOCTYPE html>
<!--
Ejercicio 10
Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos
suman según el juego de la brisca. Emplea un array asociativo para obtener los puntos a partir del
nombre de la figura de la carta. Asegúrate de que no se repite ninguna carta, igual que si las hubieras
cogido de una baraja de verdad.

Author: Jose A. Mayo Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php
    $suma = 0;
    $cantidadNumeros = 10;
    $aleatorio = array();//INICIALIZO ARRAY CON AL MENOS UN DATO
    $barajaEspañola = array(
        array("nombre" =>"As de bastos", "valor" => 11),
        array("nombre" =>"Dos de bastos", "valor" => 0),
        array("nombre" =>"Tres de bastos", "valor" => 10),
        array("nombre" =>"Cuatro de bastos", "valor" => 0),
        array("nombre" =>"Cinco de bastos", "valor" => 0),
        array("nombre" =>"Seis de bastos", "valor" => 0),
        array("nombre" =>"Siete de bastos", "valor" => 0),
        array("nombre" =>"Sota de bastos", "valor" => 2),
        array("nombre" =>"Caballo de bastos", "valor" => 3),
        array("nombre" =>"Rey de bastos", "valor" => 4),
        array("nombre" =>"As de copas", "valor" => 11),
        array("nombre" =>"Dos de copas", "valor" => 0),
        array("nombre" =>"Tres de copas", "valor" => 10),
        array("nombre" =>"Cuatro de copas", "valor" => 0),
        array("nombre" =>"Cinco de copas", "valor" => 0),
        array("nombre" =>"Seis de copas", "valor" => 0),
        array("nombre" =>"Siete de copas", "valor" => 0),
        array("nombre" =>"Sota de copas", "valor" => 2),
        array("nombre" =>"Caballo de copas", "valor" => 3),
        array("nombre" =>"Rey de copas", "valor" => 4),
        array("nombre" =>"As de espadas", "valor" => 11),
        array("nombre" =>"Dos de espadas", "valor" => 0),
        array("nombre" =>"Tres de espadas", "valor" => 10),
        array("nombre" =>"Cuatro de espadas", "valor" => 0),
        array("nombre" =>"Cinco de espadas", "valor" => 0),
        array("nombre" =>"Seis de espadas", "valor" => 0),
        array("nombre" =>"Siete de espadas", "valor" => 0),
        array("nombre" =>"Sota de espadas", "valor" => 2),
        array("nombre" =>"Caballo de espadas", "valor" => 3),
        array("nombre" =>"Rey de espadas", "valor" => 4),
        array("nombre" =>"As de oros", "valor" => 11),
        array("nombre" =>"Dos de oros", "valor" => 0),
        array("nombre" =>"Tres de oros", "valor" => 10),
        array("nombre" =>"Cuatro de oros", "valor" => 0),
        array("nombre" =>"Cinco de oros", "valor" => 0),
        array("nombre" =>"Seis de oros", "valor" => 0),
        array("nombre" =>"Siete de oros", "valor" => 0),
        array("nombre" =>"Sota de oros", "valor" => 2),
        array("nombre" =>"Caballo de oros", "valor" => 3),
        array("nombre" =>"Rey de oros", "valor" => 4),
        );

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      $indice = 0;
      do {  //COMPRUEBO NUMEROS ALEATORIOS SEAN UNICOS.
        $indiceAleatorio = rand(0, 39);
        foreach ($aleatorio as $num){
          if ($num != $indiceAleatorio) {
            $existe = false;
          } else {
            $existe = true;
            break 1; //ROMPE EL IF Y EL BUCLE ANTERIOR (FOREACH)
          }
        }
        if (!$existe){
          $aleatorio[$indice] = $indiceAleatorio;
          echo " Carta n° " . ($indice + 1) . ": " . $barajaEspañola[$aleatorio[$indice]]["nombre"] . 
                " valor: " . $barajaEspañola[$aleatorio[$indice]]["valor"] . " puntos<br>";
        $suma += $barajaEspañola[$aleatorio[$indice]]["valor"];
        $indice++;
        }
      } while (count($aleatorio)< $cantidadNumeros);            

      //MOSTRAMOS EL RESULTADO
      echo "<br> El valor total de las cartas es ". $suma . " puntos";
      }else {
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      Pulsa para barajar y sacar 10 cartas. Te mostrará la puntuación total de 
      ellas segun juego de la Brisca
      <input type="submit" value="BARAJAR">
    </form>
<?php
    }
?>
  </body>
</html>
