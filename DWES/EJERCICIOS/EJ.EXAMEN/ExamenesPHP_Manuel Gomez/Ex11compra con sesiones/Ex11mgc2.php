<?php
session_start(); // Inicio de sesión

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>Ex11mgc2</title>
      <style type="text/css">
          #contenedor {
              
          }
          #oferta {
              width: 404px;
              float: left;
          }
          .producto {
              height: 200px;
              width: 380px;
              border: 2px solid black;
              border-radius: 10px;
              margin: 10px;
          }
          img {
              width: 150px;
              float: left;
              margin-top: 5px;
              margin-right: 50px;
          }
          #cesta {
              height: 608px;
              width: 400px;
              float: left;
              align: center;
          }
          #carro {
              margin-bottom: 450px;
          }
          #anadir {
              height: 60px;
              width: 150px;
          }
          
      </style>
    </head>
    <body>
        
        <?php
        $arrayCompra = $_SESSION['compra'];
        //GUARDO los datos en el array de productos
        $arrayProductos [0] = array (
                                "marca" => "Apple",
                                "modelo" => "Iphone 5",
                                "precio" => 10,
                                "imagen" => "images/apple.jpeg",
                                );
        $arrayProductos [1] = array (
                                "marca" => "Samsung",
                                "modelo" => "Galaxy",
                                "precio" => 30,
                                "imagen" => "images/samsung.jpg"
                                );
        $arrayProductos [2] = array (
                                "marca" => "lg",
                                "modelo" => "X-25",
                                "precio" => 40,
                                "imagen" => "images/lg.jpeg"
                                );
        //FIN array procutos.
        
        //AÑADO O QUITO los diferentes productos.
        if ($_GET['articulo'] < 3) {
          $arrayCompra [$_GET['articulo']] ["unidades"]++;
        }else{
          if ($arrayCompra [$_GET['articulo'] - 3] ["unidades"] > 0) {
            $arrayCompra [$_GET['articulo'] - 3] ["unidades"]--;
          }
        }
        
        //LE QUITO LAS UNIDADES A TODOS LOS PRODUCTOS
        if ($_GET['articulo'] == "borrarTodo") {
          for ($i = 0; $i < 3; $i++) {
            $arrayCompra [$i] ["unidades"] = 0;
          }
        }
        //GUARDO las variables en la sesión.
        $_SESSION['productos'] = $arrayProductos;
        $_SESSION['compra'] = $arrayCompra;
        
        ?>
        <div id='contenedor'>
          <div id='oferta'>
            
            <?php
            //VISUALIZO en pantallas los tres productos que tengo en el $arrayProductos.
            for ($i = 0; $i < 3; $i++) {
            
            $marca = $arrayProductos [$i] ['marca'];
            $modelo = $arrayProductos [$i] ['modelo'];
            $precio = $arrayProductos [$i] ['precio'];
            $imagen = $arrayProductos [$i] ['imagen'];
            ?>
            <div class="producto">
                <img src="<?php echo $imagen; ?>">
            
              <p><?php echo $marca.": ".$modelo; ?></p>
              <p><?php echo "Precio: ".$precio." euros"; ?></p>
              <form action="Ex11mgc2.php" method="get">
                <input type="hidden" name="articulo" value="<?php echo $i; ?>">
                <input id="anadir" type="submit" name="comprar" value="AÑADIR">
              </form>
              <form action="Ex11mgc2.php" method="get">
                <input type="hidden" name="articulo" value="<?php echo ($i + 3); ?>">
                <input type="submit" name="comprar" value="QUITAR">
              </form>
            </div>
            <?php
            }
            //FIN de la visualización de productos
            ?>
          </div>
          <div id="cesta">
              <img id="carro" src="images/carro.jpeg">
              <form action="Ex11mgc2.php" method="get">
                <input type="hidden" name="articulo" value="<?php echo "borrarTodo"; ?>">
                <input id="anadir" type="submit" name="eliminar" value="ELIMINAR TODOS">
              </form>
              <h3>LISTA COMPRA</h3>
              <p>
              <?php
              //IMPRIMO el listado de los productos que se van añadiendo             
              for ($i = 0; $i < 3; $i++) {
                if ($arrayCompra [$i] ['unidades'] > 0) {
                echo "MARCA: ", $arrayProductos [$i] ['marca'], "<br>";
                echo "MODELO: ", $arrayProductos [$i] ['modelo'], "<br>";
                echo "PRECIO: ", $arrayProductos [$i] ['precio'], "<br>";
                echo "UNIDADES: ", $arrayCompra [$i] ['unidades'], "<br><br>";
                }
              }
              $totalCompra = ($arrayProductos [0] ['precio']) * ($arrayCompra [0] ['unidades']) + ($arrayProductos [1] ['precio']) * ($arrayCompra [1] ['unidades']) + ($arrayProductos [2] ['precio']) * ($arrayCompra [2] ['unidades']);
              if ($totalCompra >= 50) {
                echo "<p>TOTAL IMPORTE: ", $totalCompra, " Gastos de emvio gratuito</p>";
              }else{
                echo "<p>TOTAL IMPORTE: ", $totalCompra," + Gastos de emvio 6 euros = ", ($totalCompra + 6), " euros</p>";
              }
              //FIN impresión de productos añadidos
              ?>
              </p>
          </div>  
        </div>    
    </body>
</html>

