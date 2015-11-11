<!DOCTYPE html>
<!--
Escribe un programa que pida 10 números uno detrás de otro (no se pueden pedir los 10 en la misma página) y
que, a continuación, muestre el máximo, el mínimo y el número de capicúas (solo la cantidad).

Author: Jose Antonio Mayo Mayo   2°DAW  1°EXAMEN 1°TRIMESTRE  2015
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php

    //VARIABLES GLOBALES
  $cantidadNumeros = 10; //cuantos numeros voy a pedir
  $contadorNumeros = $_POST['contadorNumeros'];
  $arrayNumeros = unserialize(base64_decode($_POST['arrayNumeros']));
  
    //EVALUO POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") {  //compruebo exista post
  // tambien puedo poner if($_POST)
    //echo "recibo un post";
    $iniciado = true;
    
        //EVALUO ENTRADA NUMERICA
    if (is_numeric($_POST['numero'])){
      $numero = test_input($_POST['numero']);  //testedo datos introducidos
      $arrayNumeros[$contadorNumeros] = $numero;
      $contadorNumeros++;  //incremento  contador numeros introducidos
     
      if ($contadorNumeros == $cantidadNumeros) {
        //EVALUO LOS NUMEROS INTRODUCIDOS
        echo "Los numeros introducidos son: ";
        foreach ($arrayNumeros as $valor) {
          echo "$valor, ";
        }
        echo "<br>El numero máximo es " . maximo($arrayNumeros);
        echo "<br>El numero mínimo es " . minimo($arrayNumeros);
        echo "<br>La cantidad de capicuas es " . capicua($arrayNumeros);
        
          

      }
    } 
  }
  
      // INICIALIZADOR DE VARIABLES (UNA UNICA VEZ)
  if (!$iniciado) {
    $contadorNumeros = 0;
    $num;
    //echo "iniciado";
  }
  
      //FORMULARIO ---  SE MUESTRA SI SUCEDE EL CONDICIONAL
  if ($contadorNumeros < $cantidadNumeros){
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      Introduzca un número:
      <input type="text" name ="numero" autofocus>
      <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros ?>">
      <input type="hidden" name="arrayNumeros" value="<?= print base64_encode(serialize($arrayNumeros)) ?>">
      <input type="submit" value="OK">
    </form>
    <p>Has introducido <?= $contadorNumeros ?> numeros</p>
<?php
  }
  
      //CHEQUEO SEGURIDAD DATOS INTRODUCIDOS... NO NECESARIO.
  function test_input($data) {
    $data = trim($data);  //quito espacios en blanco delanteros y traseros
    $data = stripcslashes($data); //quito slash
    $data = htmlspecialchars($data);  //convierto < > en &lt y &lg, evito script malicioso
    return $data;
  }
  
  //FUNCION MINIMO == DEVUELVE INTEGER MINIMO
      function minimo($data){
        $numMinimo = PHP_INT_MAX;
          foreach ($data as $n){
            if ($n < $numMinimo){
              $numMinimo = $n;
            }
          }
        return $numMinimo;
      }//===FIN FUNCION MINIMO
      
    //FUNCION MAXIMO == DEVUELVE INTEGER MAXIMO
      function maximo($data) {
        $numMaximo = -PHP_INT_MAX;
          foreach ($data as $n){
            if ($n > $numMaximo){
              $numMaximo = $n;
            }
          }
        return $numMaximo;
      }//===FIN FUNCION MAXIMO  
       
        
  //FUNCION CAPICUA == DEVUELVE cantidad (ojo, no evalua negativos como capicua.
    function capicua($data) {
      $numCapicua = 0;
      foreach ($data as $n){
        if ($n == strrev($n)) {
            $numCapicua++;
        }
      }
       return $numCapicua;
    }//===FIN FUNCION CAPICUA
  
?>   
  </body>
</html>
