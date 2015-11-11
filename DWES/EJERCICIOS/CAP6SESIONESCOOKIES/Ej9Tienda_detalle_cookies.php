<?php session_start(); ?>
<!DOCTYPE html>
<!--
Ejercicio 6
Amplía el programa anterior de tal forma que se pueda ver el detalle de un producto. Para ello, cada
uno de los productos del catálogo deberá tener un botón *Detalle que, al ser accionado, debe llevar
al usuario a la vista de detalle que contendrá una descripción exhaustiva del producto en cuestión.
Se podrán añadir productos al carrito tanto desde la vista de listado como desde la vista de detalle.

Ejercicio 9
Amplía el ejercicio 6 de tal forma que los productos que se pueden elegir para comprar se almacenen
en cookies. La aplicación debe ofrecer, por tanto, las opciones de alta, baja y modificación de
productos.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Detalle</title>
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
        	//background-position: center;
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

      #clear {
        clear: both;
      }
    </style>
  </head>
  <body> 
    <div id="contenedor">
<?php

    //DECLARACION VARIABLES 

    $arrayProductos = $_SESSION['arrayProductos'];
    $codComprar = $_POST['codComprar'];
?>
        <div id="catalogo">      
          <div class="producto">
            <h4><?= $arrayProductos[$codComprar]['nombre'] ?></h4>
            <div class="imagen" style="background-image: url('<?= $arrayProductos[$codComprar]['imagen'] ?>'"></div>
            <div class="descripcion">
              <span><?= $arrayProductos[$codComprar]['descripcion'] ?></span>
            </div>
            <div class="precio"><span><?php echo number_format($arrayProductos[$codComprar]['precio'],2,",","."); ?>&nbsp;euros</span></div>
            <div class="botoneras">
              <div class="stock"><span>Stock:&nbsp;<?= $arrayProductos[$codComprar]['stock'] ?>&nbsp;unidades</span></div>
              <form action="Ej6Tienda.php" method="post">
                <input type="hidden" name="codComprar" value="<?= $codComprar ?>">
                <input type="submit" name="comprar" value="Comprar">
                <input type="submit" formmethod="post" formaction="Ej6Tienda.php" value="Atras">
              </form>
            </div>
          </div>   
        </div>
<?php
      $_SESSION['arrayProductos'] = $arrayProductos;
?>      
    </div>
  </body>
</html>
