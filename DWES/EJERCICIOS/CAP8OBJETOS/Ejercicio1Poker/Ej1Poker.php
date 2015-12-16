<?php session_start(); ?>
<!DOCTYPE html>
<!--
Ejercicio 1
Crea la clase DadoPoker. Las caras de un dado de poker tienen las siguientes figuras: As, K, Q, J,
7 y 8 . Crea el método tira() que no hace otra cosa que tirar el dado, es decir, genera un valor
aleatorio para el objeto al que se le aplica el método. Crea también el método nombreFigura(), que
diga cuál es la figura que ha salido en la última tirada del dado en cuestión. Crea, por último, el
método getTiradasTotales() que debe mostrar el número total de tiradas entre todos los dados.
Realiza una aplicación que permita tirar un cubilete con cinco dados de poker.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      div {
        display: inline;
      }
      img {
        width: 75px;
        height: 75px;
      }
    </style>
  </head>
  <body>
   <!DOCTYPE html>
<?php
  $numDados = 6;
  $mostrar = true;
  include_once 'DadoPoker.php';
  
  if (!isset($_SESSION['dados'])) {
    for ( $i = 0; $i < $numDados-1; $i++){
    $dados[$i] = new DadoPoker();
    };
    $_SESSION['tiradasTotales'] = DadoPoker::getTiradasTotales();
    $_SESSION['dados'] = serialize($dados);
    $mostrar = false;
  }
    DadoPoker::setTiradasTotales($_SESSION['tiradasTotales']);
    $dados = unserialize($_SESSION['dados']);
  if ($mostrar) {
    echo "Tirada anterior<br>";
    foreach($dados as $index => $objetoDado) {
      echo '<div><img src=img/'.$objetoDado->nombreFigura().'.png></div>';
    }
  }
  echo "<br>";
  echo "Tirada actual<br>";
  foreach($dados as $index => $objetoDado) {
    $objetoDado->tirar();
    //echo "<br>Tirada: " . $objetoDado->nombreFigura();
    echo '<div><img src=img/'.$objetoDado->nombreFigura().'.png></div>';
  }
  echo "<br><input type='submit' onclick='location.reload()' value='Tirar'>";
  //echo "<br><input type='submit' onclick='location.reload()' value='Tirar'>";
  echo "<br>Total tiradas: " .$objetoDado->getTiradasTotales()/5;//cuento total tiradas cubilete de 5...
  
  $_SESSION['tiradasTotales'] = DadoPoker::getTiradasTotales();
  $_SESSION['dados'] = serialize($dados); 
?>
 
</body>
</html>
