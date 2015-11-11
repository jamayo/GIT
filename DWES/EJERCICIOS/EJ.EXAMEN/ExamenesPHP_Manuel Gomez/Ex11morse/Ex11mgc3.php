<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
      <meta charset="UTF-8">
      <title>c1205ejercicio02</title>
      <style type="text/css">
          
      </style>
  </head>
    <body>
              
      <?php

      if (isset($_GET['numeroIntro'])) {
      $arrayMorse = array(
                    "1" => ". _ _ _ _",
                    "2" => ". . _ _ _",
                    "3" => ". . . _ _",
                    "4" => ". . . . _",
                    "5" => ". . . . .",
                    "6" => "_ . . . .",
                    "7" => "_ _ . . .",
                    "8" => "_ _ _ . .",
                    "9" => "_ _ _ _ .",
                    "0" => "_ _ _ _ _",
                  );
      $numero = $_GET['numeroIntro'];
      echo "NUMERO INTRODUCIDO", $numero, "<br>";
      
      $morse = "";
      
      for ($i = 0; $i < (strlen($numero)); $i++) {
        $cifra = $numero [$i];
        //echo "cifra", $cifra, "<br>";
        $morse = $morse.$arrayMorse["$cifra"];
      }      
      
      echo "CODIGO MORSE", $morse;
      die();
      
      }else{
      $numInt = "";
      //echo 'primera vez<br>'
      
      }

      ?>
        
      <form action="#" method="get"> <!--Si ponemos action="#" es igual que si pusieramos
                                     action="c1205ejercicio02.php"-->
        INTRODUCE UN NUMERO ENTERO
        <input type="text" name="numeroIntro" required autofocus><br>
        <input type="submit" name="traducir" value="TRADUCIR">
      </form>
        
    </body>
</html>