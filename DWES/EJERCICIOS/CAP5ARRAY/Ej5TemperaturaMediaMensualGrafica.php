<!DOCTYPE html>
<!--
Ejercicio 5
Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
del diagrama se pueden dibujar a base de la concatenación de una imagen.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<?php
  $temperaturaAnual = unserialize(base64_decode($_POST['temperaturaAnual']));
  if ($_SERVER["REQUEST_METHOD"] == "POST") {  //compruebo exista post
    $iniciado = true;
    if (is_numeric($_POST['temperatura'])){
      $temperatura = test_input($_POST['temperatura']);  //testeo datos introducidos
      $mes = $_POST['mes'];
      $temperaturaAnual[$mes] = $temperatura;
    }
    if ($_POST['pintarGrafica']) {
      $ancho = 500;
      $grafica = true;
    } else {
      $ancho = 220;
    }
?>
    <fieldset style="width:<?= $ancho ?>px">
      <legend>Tabla temperaturas medias</legend>
      <table>
        <tr>
          <th>Mes</th>
          <th>Temperatura</th>
<?php
  
  if ($grafica) {
    echo "<th>&nbsp;&nbsp;Gráfica de temperaturas</th>";
  };
  
?>
        </tr>
<?php
    foreach($temperaturaAnual as $mes=>$temperatura){
?>
        <tr>
          <td><?= $mes ?></td>
          <td align="right"><?= $temperatura ?></td>
<?php
  if ($grafica) {
    echo "<td>&nbsp;";
    for($i = -10; $i <0; $i++){
      if($temperatura < 0){
    
        echo "<span style='color:red'>=</span>";
      }else {
        echo "&nbsp;&nbsp;";
      }
      
    }
    for($i = 0; $i < $temperatura; $i++){
      echo "=";
    }
    echo "</th>";
  };  
?>
        </tr>
<?php
    }
?>
      </table>
    </fieldset>
<?php    
  } 
  if (!$iniciado) {
    //inicializo el array
  $temperaturaAnual['Enero'] = 0;
  $temperaturaAnual['Febrero'] = 0;
  $temperaturaAnual['Marzo'] = 0;
  $temperaturaAnual['Abril'] = 0;
  $temperaturaAnual['Mayo'] = 0;
  $temperaturaAnual['Junio'] = 0;
  $temperaturaAnual['Julio'] = 0;
  $temperaturaAnual['Agosto'] = 0;
  $temperaturaAnual['Septiembre'] = 0;
  $temperaturaAnual['Octubre'] = 0;
  $temperaturaAnual['Noviembre'] = 0;
  $temperaturaAnual['Diciembre'] = 0;
  //echo "iniciado";
  }
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="temp" method="post">
      Elige mes: 
      <select name="mes" form="temp">    
        <option value="Enero">Enero</option>
        <option value="Febrero">Febrero</option>
        <option value="Marzo">Marzo</option>
        <option value="Abril">Abril</option>
        <option value="Mayo">Mayo</option>
        <option value="Junio">Junio</option>
        <option value="Julio">Julio</option>
        <option value="Agosto">Agosto</option>
        <option value="Septiembre">Septiembre</option>
        <option value="Octubre">Octubre</option>
        <option value="Noviembre">Noviembre</option>
        <option value="Diciembre">Diciembre</option>
      </select>
      <br>Temperatura media: 
      <input type="text" size="4" maxlength="2" name="temperatura"><br>
      <input type="hidden" name="temperaturaAnual" value="<?= print base64_encode(serialize($temperaturaAnual)) ?>">
      <input type="submit" name="guardarTemperatura" value="Guardar temperatura">
      <input type="submit" name="pintarGrafica" value="Pintar gráfica">
     </form>
<?php
  function test_input($data) {
    $data = trim($data);  //quito espacios en blanco delanteros y traseros
    $data = stripcslashes($data); //quito slash
    $data = htmlspecialchars($data);  //convierto < > en &lt y &lg, evito script malicioso
    return $data;
  }
?>
  </body>
</html>
