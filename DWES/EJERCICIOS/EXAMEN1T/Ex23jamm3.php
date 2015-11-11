<!DOCTYPE html>
<!--
Realiza un programa que genere al azar las capturas que han hecho dos jugadores durante una partida. Las
capturas pueden ir de 0 a 15 Hay que tener en cuenta que cada jugador tiene la posibilidad de capturar algunas
de las siguientes piezas (no más): 1 dama, 2 torres, 2 alfiles, 2 caballos y 8 peones.

Author: Jose A. Mayo Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      #pantalla {
        position: relative;
      }
    div {
        min-height: 150px;
        min-width: 100px;
        margin: 30px;
        padding: 5px;
        float: left;
        border: 1px solid;
      }
    </style>
  </head>
  <body>
<?php
    $suma = 0;
    $cantidadNumeros = 10;
    $aleatorio = array();//INICIALIZO ARRAY CON AL MENOS UN DATO
    $arrayFichas = ["Dama", "Torre", "Torre", "Alfil", "Alfil", "Caballo",
        "Caballo", "Peon", "Peon", "Peon", "Peon", "Peon", "Peon", "Peon", "Peon"];
    $jugador1 = array();
    $jugador2 = array();
    $valorFichas = array(
                        "Dama" => 9,
                        "Torre" => 5,
                        "Alfil" => 3,
                        "Caballo" => 2,
                        "Peon" => 1,
                        );

    
      $indice = 0;
 //COMPRUEBO NUMEROS ALEATORIOS SEAN UNICOS.
        $indiceAleatorio1 = rand(0, 15);
        $indiceAleatorio2 = rand(0, 15);
        
        //JUGADOR 1
        for ($i = 0; $i < $indiceAleatorio1; $i++){
          $posFicha = rand(0,14);
          if(!in_array($posFicha, $jugador1 )){
            $jugador1[] = $posFicha;
          }
        }
        for ($i = 0; $i < $indiceAleatorio2; $i++){
          $posFicha = rand(0,14);
          if(!in_array($posFicha, $jugador2 )){
            $jugador2[] = $posFicha;
          }
        }
        
        //MUESTRO LAS CARTAS JUGADOR 1
?>
    <div id="pantalla">
    <div>
      <table >
      <tr>
        <th><h2>Jugador 1</h2></th>
      </tr>
      <tr>
      <td>
<?php    
          $sumaJugador1 = 0;
        foreach($jugador1 as $pos){
          echo $arrayFichas[$pos] . " ( " . $valorFichas[$arrayFichas[$pos]] . " peones)<br>"; 
          $sumaJugador1 += $valorFichas[$arrayFichas[$pos]];
        }
 ?>       
      </td>
      </tr>
      </table>
      <h4>JUGADOR 1, TOTAL  <?= $sumaJugador1?> PEONES </h4>
    </div>
    <div>
      <table>
        <tr>
          <th><h2>Jugador 2 </h2></th>
        </tr>
        <tr>
      <td>
<?php
        $sumaJugador2 = 0;
        foreach($jugador2 as $pos){
          echo $arrayFichas[$pos] . " ( " . $valorFichas[$arrayFichas[$pos]] . " peones)<br>";
          $sumaJugador2 += $valorFichas[$arrayFichas[$pos]];
        }
 ?>       
      </td>
      </tr>
        
      </table> 
      <h4>JUGADOR 2  TOTAL <?= $sumaJugador2?> PEONES</h4>
    </div>
             
    </div>
     
  </body>
</html>
