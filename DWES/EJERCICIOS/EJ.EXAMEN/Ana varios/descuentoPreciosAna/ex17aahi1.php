<!--
Nombre: Ana Holgado
Curso: DAW2
Fecha: 21/10/2015
Turno: 1
-->
<!DOCTYPE html> 
<!--Ejercicio 1. Realiza un programa que aplique un descuento a 10 precios. 
Primero el programa pedirá uno a uno (no en la misma página) los diez precios. 
Luego pedirá la cantidad que hay que descontar. Por último se mostrarán los 10 
precios originales junto a los precios con el descuento aplicado. Sólo se realizará 
descuento cuando el valor del artículo sea mayor que la cantidad que se quiere 
descontar; en caso de no cumplirse este supuesto, no se aplica ningún descuento. 
Puedes utilizar sesiones o campos ocultos en formularios.
-->

<html> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="keywords" content="Ejercicios PHP">
	<meta name="author" content="Ana Holgado">
	<title>Aprende PHP - t1c1a</title>  
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head> 
    
    <body> 
        <header id = "header">
            <h1>EXAMEN T1C1A</h1>
            <h2><a href= "index.php">ARRAYS </a></h2>
	</header>
        <nav>
                <ul>
                    <li><a href="descuentoPreciosAna/ex17aahi1.php">Ejercicio 1</a></li>
                    <li><a href="../MatrizCambioFilasColumnas/ex17aahi2.php">Ejercicio 2</a></li>
                    <li><a href="../BarajaNoCoincida/ex17aahi4.php">Ejercicio 4</a></li>
                </ul>
	</nav>
        <section>
            <article>
                <h3>Ejercicio 1</h3>
                <p>Realiza un programa que aplique un descuento a 10 precios. 
Primero el programa pedirá uno a uno (no en la misma página) los diez precios. 
Luego pedirá la cantidad que hay que descontar. Por último se mostrarán los 10 
precios originales junto a los precios con el descuento aplicado. Sólo se realizará 
descuento cuando el valor del artículo sea mayor que la cantidad que se quiere 
descontar; en caso de no cumplirse este supuesto, no se aplica ningún descuento. 
Puedes utilizar sesiones o campos ocultos en formularios.
                </p>
            </article>
            <article>
                <h3>Ejercicio Resuelto</h3>
                <p>Descuentos</p>
                <?php
                    if(!isset($_REQUEST['enviar'])){
                        $contador = 0;
                    } else{
                        //declaración de variables
                        $contador = $_GET['contador'];
                        $numero = number_format($_GET['numero'],2);//Recojo el precio pedido y le pongo dos decimales
                        $arrayNum = $_GET['arrayNum'];//Array de precios
                        $arrayNum = unserialize($arrayNum);
                        $arrayNum[$contador] = $numero;//Añado nuevo precio
                        $contador++;
                    }
                ?>
                <form action="#" method="get"> 
                   <?php
                   if ($contador < 10){//Cuando se introducen los 10 precios desaparece el input
                    echo "<label>Número ". ($contador+1)."</label>";
                    echo'<input type="number" step="0.01" name="numero" autofocus>';
                   }
                   ?>
                   <input type="hidden" name="contador" value=<?= $contador?>>
                   <input type="hidden" name="arrayNum" value=<?= serialize($arrayNum)?>>
                   <?php
                   if($contador == 10){//el descuento aparece despues de los precios
                       echo '<label>Descuento</label><input type="number" step="0.01" name="descuento" autofocus>';
                   }
                   if ($contador < 11){
                       echo '<input type="submit" name="enviar" value ="Enviar"><br>';
                   }
                   
                   
                   ?>
                </form>
    </article>
    <article>
        <h3>Resultado</h3>
        <table>
        <?php
            $descuento = $_GET['descuento'];//recojo descuento
            if ($contador == 11){//Cuendo se hallan introducido los precios y el descuento aparece la tabla
                echo "<tr><td>Nombre Producto</td><td>Precio</td><td>Precio Final</td></tr>";
                for ($i = 0; $i < 10; $i++){
                    echo "<tr><td>".($i+1)."</td><td>".$arrayNum[$i]."</td>";//inpime le contador
                    if($arrayNum[$i] > $descuento){//si el descuento es mayor al precio, se aplica.
                        echo "<td>".number_format(($arrayNum[$i]-$descuento),2)."</td></tr>";
                    } else {
                        echo "<td>".$arrayNum[$i]."</td></tr>";
                    }
                }
            }
        ?>
        </table>
        
        </article>
        </section>
        <footer>
            <p  align="center" class="texto"> Página realizada por Ana Holgado Infante. <br>I.E.S. Campanillas. Desarrollo Web en Entorno Servidor.</p>
        </footer>
    </body> 
</html>
