<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Autor: Manuel Gómez Cerezo
Fecha: 21-11-2014
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex11mgc1</title>
        <style type="text/css">
            .primo {
              color: blue;
            }
            .par {
              color: green;
            }
            .negro {
              color: black;
            }
        </style>
    </head>
    <body>
        
        <?php
          
        if (isset($_GET['numeroIntroducido'])) {
          
          $concNumeros = $_GET['concatenaNumeros'];
          $contNumeros = $_GET['contadorNumeros'];
          
          $concNumeros = $concNumeros." ".$_GET['numeroIntroducido'];
          $contNumeros++;
                    
          if ($contNumeros == 8) {

              $concNumeros = substr($concNumeros, 1);
              
              $arrayNum = explode(" ", $concNumeros);
              echo "Numeros Introducidos: ";
//              foreach ($arrayNum as $elemento) 
//              echo $elemento, ",";
              
              for ($i = 0; $i < 8 ; $i++) {
              $numero = $arrayNum [$i];
              $esPrimo = TRUE;
              for ($j = 2; $j < $numero; $j++) { //Comprobar si es primro
              
                if (($numero % $j) == 0) {
                  $esPrimo = FALSE;
                }
              }
              if ($esPrimo) {
                echo "<span class='primo'>", $numero,  ", <span>";
                              
              } elseif (($numero % 2) == 0){ //Comprobar si es par
                echo "<span class='par'>", $numero,  ", <span>";
              
              } else {
                echo "<span class='negro'>", $numero,  ", <span>";//Si no es ni par ni primo
              }
              
            }
          die();  
          }
          
         
        }else{
          //echo 'primera vez<br>';
          $contPositivos = 0;
          $contNegativos = 0;
        }
        
        
        ?>
        
      <form action="Ex11mgc1.php" method="get">
          Introduzca 8 números enteros que quieras y pulsa intro<br>
          <input type="text" name="numeroIntroducido" required autofocus>
          <input type="hidden" name="concatenaNumeros" value="<?php echo $concNumeros; ?>">
          <input type="hidden" name="contadorNumeros" value="<?php echo $contNumeros; ?>">
          <input type="submit" name="solucion" value="solucion">
      </form> 
        
      
    </body>
</html>