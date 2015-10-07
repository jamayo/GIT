<!DOCTYPE html>
<!--
Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2+bx+c=0
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    
      <h4>Introduce los valores de a, b y c</h4>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h2> Resolución ecuación cuadrática  a<input type="text" size="7" name="a_value"><sup>2</sup> + bx + c = 0 </h2>
        <span>valor de a&nbsp</span><input type="text" name="a_value"><br><br>
        <span>valor de b&nbsp</span><input type="text" name="b_value"><br><br>
        <span>valor de c&nbsp</span><input type="text" name="c_value"><br><br>
        <input type="submit" value="Calcular 'X'"><br><br>
      </form>
    //  CORRECCIONES DE LUIS.... VERR
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {   //si he pulsado boton del form
          $a_value = $_REQUEST['a_value'];
          $b_value = $_REQUEST['b_value'];
          $c_value = $_REQUEST['c_value'];
          $discriminante = (pow($b_value , 2) - 4 * $a_value * $c_value);
          if (!is_numeric($a_value . $b_value . $c_value)){ 
            echo "No has introducido numeros";
          } else if ($a_value == 0){
            echo '<El coeficiente "a" nunca puede ser cero, ya que no sería ecuación de segundo grado';
          } else if ($discriminante > 0) {  
              echo "Discriminante mayor que cero, dos soluciones con números reales distintos<br>";
              echo "Solución 1: " . ((-1 * $b_value + sqrt(pow($b_value , 2) - 4 * $a_value * $c_value)) / (2 * $a_value)) . "<br>";
              echo "Solución 2: " . ((-1 * $b_value - sqrt(pow($b_value , 2) - 4 * $a_value * $c_value)) / (2 * $a_value));
          }else if ($discriminante == 0) {
              echo "Discriminante igual a cero, solución real doble<br>";
              echo "Solución doble : " . (-1 * ($b_value / (2 * $a_value))) . "<br>";
              //echo "Solución 2: " . (-1 * ($b_value / (2 * $a_value)));
          }else {
              echo "Discriminante menor que cero, dos soluciones complejas<br>";
              echo "Solución 1: " . (-1 * ($b_value / (2 * $a_value))) . " + i" . ((sqrt(-1 * (pow($b_value , 2) - 4 * $a_value * $c_value))) / (2 * $a_value)) . "<br>";
              echo "Solución 2: " . (-1 * ($b_value / (2 * $a_value))) . " - i" . ((sqrt(-1 * (pow($b_value , 2) - 4 * $a_value * $c_value))) / (2 * $a_value));
            }
          }
        
      ?>   
  </body>
</html>
