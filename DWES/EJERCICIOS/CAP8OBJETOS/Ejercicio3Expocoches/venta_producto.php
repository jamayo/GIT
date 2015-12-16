<?php session_start(); ?>
<!DOCTYPE html>

<html lang="es">
<head>
  <title>Venta de entradas EXPOCOCHE</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/960.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
</head>
<body>
<?php

  include_once 'Zona.php';
  
  $mensaje = "";
  
  if (!isset($_SESSION['zonas'])) {
    $zonas = [new Zona("zona Principal", 1000), new Zona("zona Compra-venta", 200), new Zona("zona V.I.P.", 25)];
    $_SESSION['zonas'] = serialize($zonas);
  }
    
  $zonas = unserialize($_SESSION['zonas']);

  //SI HAY POST REALIZO LA ACCCION QUE CORRESPONDA
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
     //VENDER (INCREMENTA numeroEntradasVendidas Y DECREMENTA numeroEntradas)
    if(isset($_POST['vender'])) {
      if ($_POST['stock'] > 0 && $_POST['vender'] == "+"){
        $zonas[$_POST['indice']]->venderEntradas(1);
      } else if ($_POST['venta'] > 0 && $_POST['vender'] == "-"){
        $zonas[$_POST['indice']]->venderEntradas(-1);
      }
    $_SESSION['zonas'] = serialize($zonas);
    $mensaje3;
    } // FIN VENDER
    
    //ANULAR VENTA, REINTEGRA LA COLUMNA VENTA A LA COLUMNA STOCK (VUELVE STOCK A ALMACÉN)
    if(isset($_POST['anularVenta'])) {
      foreach ($zonas as $zona){
        $zona->venderEntradas(-$zona->getNumEntradasVendidas());
        $zona->setNumEntradasVendidas(0);
      }
      $mensaje = "Venta anulada correctamente";
      $_SESSION['zonas'] = serialize($zonas);
    } // FIN ANULAR VENTA
    
     //FINALIZAR VENTA, DEJA STOCK COMO ESTA Y PONE A CERO CANTIDAD VENDIDA
    if(isset($_POST['finalizarVenta'])) {
      foreach ($zonas as $zona){
        $zona->setNumEntradasVendidas(0);
      }
      $mensaje = "Venta realizada correctamente";
      $_SESSION['zonas'] = serialize($zonas);
    } //FIN FINALIZAR VENTA
      
      //header('Location: index.php');  //redirijo a index.php
  }
?>   
  <div class="container_16">
    <h1>"EXPOCOCHES"</h1>
    <h1>Venta de entradas</h1>
    <div class="grid_16">
      <div class="grid_16" id="head">
        <div class="grid_7 suffix_1" id="head_des">Descripción</div>
        <div class="grid_1 suffix_1" id="head_stock"  style="text-align: right;">Disponibles</div>
        <div class="grid_3" id="head_stock"  style="text-align: right;">Añadir a carrito</div>
      </div>
      <div class="clear"></div>
<?php
      foreach ($zonas as $index => $zona) {
?>
      <div class="grid_16" id="body">
        <form action="#" method="post" id="form1">
          <div class="grid_7 suffix_1" id="desg">Entradas <?= $zona->getNombreZona()?><hr width="80%"></div>
          <div class="grid_1 suffix_1" id="stock" style="text-align: right;"><?= $zona->getNumEntradasDisponibes()?></div>
          <div class="grid_1">&nbsp;</div>
          <div class="grid_3 venta" id="stock" style="width: 90px;">
            <input type="hidden" name="indice" value="<?= $index ?>">
            <input type="hidden" name="stock" value="<?=$zona->getNumEntradasDisponibes()?>">
            <input type="hidden" name="venta" value="<?=$zona->getNumEntradasVendidas()?>">
            
            <input type="submit" value="-" name="vender" class="venta">
            <?=$zona->getNumEntradasVendidas()?>
            <input type="submit" value="+" name="vender" class="venta">
          </div>  
        </form>
      </div>
      <div class="clear"></div>
<?php
      };
?>
      <div class="grid_16" id="body">
        <div class="prefix_2 grid_6" id="total" style="text-align: right;"><?= "&nbsp;" ?></div>
        <div class="grid_3" id="realizar_compra"><input type="submit" value="Confirmar compra" name="finalizarVenta" form="form1" class="eliminar"></div>
        <div class="grid_2" id="anular_compra"><input type="submit" value="Anular venta" name="anularVenta" form="form1" class="editar"></div>
      </div> 
      <div class="clear"></div>
      <!--MUESTRO MENSAJES DE ESTADO-->
      <div class="grid_16" id="body">
        <span style="background-color: #ffeb20;"><?= $mensaje ?></span>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</body>
</html>
