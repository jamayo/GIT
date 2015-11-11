<?php session_start(); ?>
<?php
  $arrayProductosDatos  = [  //"1" es el codigo de producto
      "1" => ["nombre" => "Pack 3 unidades de Preservativo Durex Natural Plus 24 Unidades ",
              "descripcion" => "Con la forma easy-on, lubricados y con forma anatómica que "
              . "asegura su sujeción y facilitan su colocación, el amor es seguro",
              "precio" => 29.25,
              "imagen" => "/img/300_pack-3-unidades-de-preservativo-durex-natural-plus-24-unidades.jpg",
              "stock" => 3],
      "2" => ["nombre" => "Pack 6 unidades de Preservativo Durex Natural Plus 24 Unidades",
              "descripcion" => "Con la forma easy-on, lubricados y con forma anatómica que "
              . "asegura su sujeción y facilitan su colocación, el amor es seguro",
              "precio" => 57.00,
              "imagen" => "/img/300_pack-6-unidades-de-preservativo-durex-natural-plus-24-unidades.jpg",
              "stock" => 6],
      "3" => ["nombre" => "Preservativo Durex Natural Plus 24 Unidades",
              "descripcion" => "Con la forma easy-on, lubricados y con forma anatómica que "
              . "asegura su sujeción y facilitan su colocación, el amor es seguro",
              "precio" => 9.90,
              "imagen" => "/img/300_preservativo-durex-natur-plus-24-unidades.jpg",
              "stock" => 24],
      "4" => ["nombre" => "Durex Real Feel 24 preservativos",
              "descripcion" => "Los nuevos preservativos Durex Real Feel aportan "
              . "una sensación de contacto natural con la piel intensificando tus relaciones. "
              . "Preservativos sin latex, transparentes y lubricados. ",
              "precio" => 14.45,
              "imagen" => "/img/300_durex-real-feel-24-preservativos-1.jpg",
              "stock" => 30],
      "5" => ["nombre" => "Pack 3 unidades de Durex Real Feel 24 preservativos",
              "descripcion" => "Los nuevos preservativos Durex Real Feel aportan "
              . "una sensación de contacto natural con la piel intensificando tus relaciones. "
              . "Preservativos sin latex, transparentes y lubricados. ",
              "precio" => 41.25,
              "imagen" => "/img/300_pack-3-unidades-de-durex-real-feel-24-preservativos.jpg",
              "stock" => 6],
      "6" => ["nombre" => "Durex Real Feel 12 preservativos",
              "descripcion" => "Los nuevos preservativos Durex Real Feel aportan "
              . "una sensación de contacto natural con la piel intensificando tus relaciones. "
              . "Preservativos sin latex, transparentes y lubricados. ",
              "precio" => 6.50,
              "imagen" => "/img/300_durex-real-feel-24-preservativos.jpg",
              "stock" => 12]
      ];
  
  if (isset($_SESSION['arrayProductos'])){ //SI EXISTE SESION ARRAYPRODUCTOS LO GRABO EN COOKIES
    $arrayProductos = $_SESSION['arrayProductos'];
    foreach ($arrayProductos as $codigo => $datos) {
      $cookieDatos = base64_encode(serialize($datos));
      setcookie("nuevoProducto[$codigo]", $cookieDatos, time() + 3*24*3600);
    }
  } else {
    if (!isset($_COOKIE['nuevoProducto'])) { //SI NO EXISTE SESION ARRAYPRODUCTOS, GRABO ARRAYPRODUCTOSDATOS
      foreach ($arrayProductosDatos as $codigo => $datos) {
        $arrayProductos[$codigo] = $datos; //TOMO LOS DATOS DIRECTAMENTE Y ME SALTO EL PASO DE LINEA 239.
        $cookieDatos = base64_encode(serialize($datos));
        setcookie("nuevoProducto[$codigo]", $cookieDatos, time() + 3*24*3600);
      }
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Farmacia Pepe</title>
    <link rel="stylesheet" type="text/css" href="style/reset.css">
    <style>
     
     #contenedor {
        position:absolute;
        width: 100%;
        min-width: 1112px;
        overflow-y:hidden;
        top:0;
        bottom:0;
    
        background-color:beige;
        //border: 1px solid black;
      }
      #catalogo {
        float: left;
        width: 69%;
        min-width: 765px;
        height: 100%;
        background-color:aliceblue;
        margin: auto;
        border: 1px solid black;
        overflow: auto;
       
      }
      #cestaCompra {
        //position: relative;
        float: right;
        //right:0px;
        //top:0px;
        width: 28%;
        min-width: 328px;
        height: 400px;
        padding: 4px;
        max-height: 400px;
        margin: auto;
        border: 1px solid black;
        overflow-y: auto;
        overflow-x:hidden;
        background: url("/img/cestaCompra.jpg") no-repeat center;
        background-size: contain;
      }
      #totalCompra{
        float: right;
       //position: relative;
        //right:0px;
        //top:412px;
        width: 28%;
        min-width: 328px;
        
        padding: 4px;
        height: 35px;
        font-size:x-large;
        background-color:beige;
        margin: auto;
        border: 1px solid black;
      }
      .cesta {
        width: 80%;
        min-width: 300px;
        height: 75px;
        margin: auto;
        margin-top: 5px;
        padding: 4px;
        background-color:floralwhite;
        border: 1px solid black;
        border-radius: 10px;
      }
      .producto {
        width: 80%;
        min-width: 710px;
        height: 200px;
        margin: auto;
        margin-top: 10px;
        padding: 12px;
        background-color:floralwhite;
        border: 1px solid black;
        border-radius: 15px;
      }
      h4 {
        float: left;
        margin: 5px 0px;
        display: inline-block;
        max-width: 480px;
      }
      h3{
        text-align:center;
        vertical-align: middle;
      }
      .descripcion {
        float: left;
        width: 65%;
        min-width: 480px;
        height: 100px;
        padding: 10px;
        border: 1px solid black;
      }
      .botonera {
        float: right;
        width: 250px;
        height: 30px;
        margin: 10px;
        //border: 1px solid black;
      }
      .precio {
        float:left;
        width: auto;
        height: 25px;
        margin: 10px 15px;
        text-align: right;
        display:inline-block;
        //border: 1px solid black;
      }
      .stock, .boton, input {
        float:left;
        width: auto;
        height: 20px;
        margin: 10px 15px;
        text-align: right;
        display:inline-block;
        //border: 1px solid black;
      }
      .imagen {
        float: right;
        width: 200px;
        min-width: 200px;
        min-height: 150px;
        height: 200px;
        border: 1px solid black;
        background-image: url("<?= $cod['imagen'] ?>");
        background-repeat: no-repeat;
        background-size: contain;
        max-width: 100%;
      }
      .imagencesta {
        float: right;
        width: 30%;
        min-height: 50px;
        height: 100px;
        border: 1px solid black;
        background-image: url("<?= $cod['imagen'] ?>");
        background-repeat: no-repeat;
        background-size: contain;
        max-width: 100%;
      }
      #clear {
        clear: both;
      }
    </style>
  </head>
  <body> 
    <div id="contenedor">
<?php

    //DECLARACION VARIABLES 



   
    //BUCLES DE PRUEBA
    //CARGO EL ARRAY ASOCIATIVO QUE TENGO EN LA COOKIE PARA DESPUES RECUPERARLO.(de prueba)
    //if (!empty($_POST["spanish"])) {
/*    foreach ($arrayProductos as $codigo => $datos) {
      $cookieDatos = base64_encode(serialize($datos));
      setcookie("nuevoProducto[$codigo]", $cookieDatos, time() + 3*24*3600);
    }
      */
    //} 
    
    
    //RECUPERO DATOS DE PRODUCTOS NUEVOS ALMACENADOS EN COOKIES Y LO AÑADO AL ARRAY
    //OJO CON LOS PRODUCTOS QUE CAMBIAN....
/*    //ESTO GENERA PROBLEMAS, LO ANULO, SOLO GUARDO LOS DATOS EN LAS COOKIES PERO NO LAS RECUPERO PARA OPERAR.
    if (isset($_COOKIE['nuevoProducto'])) {
      //$arrayProductos = NULL; //reinicializo cada vez para cargar valores nuevos
      foreach ($_COOKIE['nuevoProducto'] as $codigo2 => $datos2) {
          $arrayDatos = unserialize(base64_decode($datos2));
          var_dump($arrayDatos);
          $arrayProductos[$codigo2] = $arrayDatos;
      }
    }*/
    //echo "muestro el resultado de toda la operacion";
    //var_dump($arrayNuevoProducto);
    
    //AHORA MUESTRO EL RESULTADO
  /*  foreach ($arrayNuevoProducto as $codigo3 => $datos3){
      echo "codigo: " . $codigo3;
      echo "nombre " . [$datos3]['nombre'];
      echo "descripcion " . [$datos3]['descripcion'];
      echo "precio " . [$datos3]['precio'];
      echo "imagen " . [$datos3]['imagen'];
      echo "stock " . [$datos3]['stock'];

      
    }*/
    
    
    
    
 
    if (isset($_SESSION['arrayCesta'])){ 
      $arrayProdCesta = $_SESSION['arrayCesta'];
    } else {
      $arrayProdCesta = [];
    }
    
    if (isset($_POST['codComprar'])) {
        $codComprar = $_POST['codComprar'];
        if (!array_key_exists($codComprar, $arrayProdCesta)) {
          //echo "no existe y doy de alta<br>";
          if ($arrayProductos[$codComprar]['stock'] > 0 ){
          //$arrayProdCesta[] = $codComprar;
          $arrayProdCesta[$codComprar] = 1;
          $arrayProductos[$codComprar]['stock'] -= 1;
          } else {
            echo "SIN STOCK, COLOCAR ESTE MENSAJE";
          }   
        } else {
          //echo "existe e incremento <br>";
          if ($arrayProductos[$codComprar]['stock'] > 0){
            $arrayProdCesta[$codComprar] += 1;
            $arrayProductos[$codComprar]['stock'] -= 1;
          }
        }
    } else if (isset($_POST['codEliminar'])) {
        //echo "eliminar<br>";
        $codEliminar = $_POST['codEliminar'];
        if ($arrayProdCesta[$codEliminar] > 1){
        $arrayProdCesta[$codEliminar] -= 1;
        $arrayProductos[$codEliminar]['stock'] += 1;
        } else {
          $arrayProductos[$codEliminar]['stock'] += 1;
          unset($arrayProdCesta[$codEliminar]);
        }
    }
?>
        <div id="catalogo">
<?php
    foreach ($arrayProductos as $cod => $producto){ 
?>      
          <div class="producto">
            <h4><?= $producto['nombre'] ?></h4>
            <div class="imagen" style="background-image: url('<?= $producto['imagen'] ?>')"></div>
            <div class="descripcion">
              <span><?= $producto['descripcion'] ?></span>
            </div>
            <div class="precio"><span><?php echo number_format($producto['precio'],2,",","."); ?>&nbsp;euros</span></div>
            <div class="botoneras">
              <div class="stock"><span>Stock:&nbsp;<?= $producto['stock'] ?>&nbsp;unidades</span></div>
              <form action="<?php echo $_POST['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="codComprar" value="<?= $cod ?>">
                <input type="submit" formmethod="post" formaction="Ej9Tienda_detalle_cookies.php" value="Detalle">
                <input type="submit" name="comprar" value="Comprar">
              </form>
            </div>
          </div>
<?php
    }
?>      
        </div>
        <div id="cestaCompra">
<?php
    $totalCompra;
    if (!empty($arrayProdCesta)){
      foreach ($arrayProdCesta as $codCesta => $stock){  
        $totalCompra += ($arrayProductos[$codCesta]['precio'] * $stock)
?>
          <div class="cesta">
            <h5><?= $arrayProductos[$codCesta]['nombre'] ?></h5>
            <div class="imagenCesta" style="background-image: url('<?= $arrayProductos[$codCesta]['imagen'] ?>'"></div>
            <div class="precio"><span><?php echo number_format($arrayProductos[$codCesta]['precio'],2,",","."); ?>euros</span></div> 
            <div class="botoneras">
              <div class="stock"><span><?= $stock ?>&nbsp;unidades</span></div>
              <form action="<?php echo $_POST['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="codEliminar" value="<?= $codCesta ?>">
                <input type="submit" value="Eliminar">
              </form>
            </div>
          </div>
<?php
      }
    }
?>      
        </div>
      <div id="totalCompra">
        <h3>Total compra:&nbsp;<?= number_format($totalCompra,2,",",".") ?>&nbsp;euros</h3>
      </div>
<?php
      $_SESSION['arrayProductos'] = $arrayProductos;
      $_SESSION['arrayCesta'] = $arrayProdCesta;
      
 /*
        foreach ($arrayProductosDatos as $codigo => $datos) {
         $cookieDatos = base64_encode(serialize($datos));
         setcookie("nuevoProducto[$codigo]", $cookieDatos, time() + 3*24*3600);
        }
      */
      
      /*
      foreach ($arrayProductos as $codigo => $datos) {
      $cookieDatos = base64_encode(serialize($datos));
      setcookie("nuevoProducto[$codigo]", $cookieDatos, time() + 3*24*3600);
    }*/
  
  
?>      
    </div>
  </body>
</html>
