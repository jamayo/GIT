<!--
Nombre: Ana Holgado
Curso: DAW2
Fecha: 21/10/2015
Turno: 1
-->
<!DOCTYPE html> 
<!--Ejercicio 2. Realiza un programa que sea capaz de intercambiar filas y 
columnas de una matriz cuadrada. Se debe definir una matriz de 10 filas por 10 
columnas que el programa llenará de forma aleatoria con números entre 10 y 99 
(ambos incluidos). Después de mostrar la matriz por pantalla (con los números 
convenientemente alineados), el programa pedirá por teclado un número de fila y 
un número de columna. Después intercambiará los valores de la fila y la columna 
indicadas. Se debe mostrar por pantalla la matriz resultante. Tanto los números 
de fila como los números de columna se deben indicar convenientemente al mostrar 
la matriz original y la matriz resultado. La fila y columna intercambiada se 
debe mostrar en color verde.
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
                    <li><a href="../descuentoPreciosAna/ex17aahi1.php">Ejercicio 1</a></li>
                    <li><a href="MatrizCambioFilasColumnas/ex17aahi2.php">Ejercicio 2</a></li>
                    <li><a href="../BarajaNoCoincida/ex17aahi4.php">Ejercicio 4</a></li>
                </ul>
	</nav>
        <section>
            <article>
                <h3>Ejercicio 2</h3>
                <p>Realiza un programa que sea capaz de intercambiar filas y 
columnas de una matriz cuadrada. Se debe definir una matriz de 10 filas por 10 
columnas que el programa llenará de forma aleatoria con números entre 10 y 99 
(ambos incluidos). Después de mostrar la matriz por pantalla (con los números 
convenientemente alineados), el programa pedirá por teclado un número de fila y 
un número de columna. Después intercambiará los valores de la fila y la columna 
indicadas. Se debe mostrar por pantalla la matriz resultante. Tanto los números 
de fila como los números de columna se deben indicar convenientemente al mostrar 
la matriz original y la matriz resultado. La fila y columna intercambiada se 
debe mostrar en color verde.
                </p>
            </article>
            <article>
                <h3>Ejercicio Resuelto</h3>
                <p>Matriz Original</p>
                <?php
                if (!isset($_REQUEST['enviar'])){//cuando no se envia el formulario se crea la matriz original y se almacena
                    for ($i = 0; $i < 10 ; $i++){
                        for ($j = 0; $j <10; $j++){
                            $matrizOriginal[$i][$j] = rand(10,99);
                        }
                    }
                }else {
                    //recogida de variables
                    $fila = $_GET['fila'];//fila a intercambiar
                    $columna = $_GET['columna'];//columna a intercambiar
                    $matrizOriginal = $_GET['matrizOriginal'];//matriz original
                    $matrizOriginal = unserialize($matrizOriginal);
                }
                //Impirmir la matriz original
                echo "<table><tr><th></th><th>1</th><th>2</th><th>3</th><th>4</th>"
                . "<th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th></tr>";
                for ($i = 0; $i < 10 ; $i++){
                    echo "<tr><th>".($i+1)."</th>";
                        for ($j = 0; $j <10; $j++){
                            echo "<td>".$matrizOriginal[$i][$j]."</td>";
                        }
                    echo "</tr>";
                }
                echo "</table>";
                //Fin de la impresion de la matriz original
                    if(!isset($_REQUEST['enviar'])){//para que desaparezca el formulario cuando se envie
                ?>
                
                <form action="#" method="get"> 
                   <label>Fila:</label><input type="text" name="fila" autofocus><br>
                   <label>Columna:</label><input type="text" name="columna"><br>
                   <input type="hidden" name="matrizOriginal" value= <?= serialize($matrizOriginal)?> >
                   <input type="submit" name="enviar" value ="Enviar"><br>
                </form>
                <?php
                    }
                ?>
    </article>
    <article>
        <h3>Resultado</h3>
        <p>Matriz Nueva
        <?php
            if (isset($_REQUEST['enviar'])){
                $matrizNueva = $matrizOriginal;//Duplico la matriz original
                for ($i = 0; $i < 10 ; $i++){
                    if ($i == ($fila-1)){//fila-1 porque pido del 1 al 9, y lo tengo que pasar a la posicion de array
                        for ($j = 0; $j <10; $j++){
                            $matrizNueva[$i][$j] = $matrizOriginal[$j][$columna-1];//en la fila elegida escribo la columna
                        }
                    }
                    for ($j = 0; $j < 10; $j++){
                        if ($j == ($columna-1)){//fila-1 porque pido del 1 al 9, y lo tengo que pasar a la posicion de array
                            $matrizNueva[$i][$j] = $matrizOriginal[$fila-1][$i];//En la columna elegida escribo la fila elegida
                        }
                    }
                }
                //Para imprimir el nuevo array
                echo "<table><tr><th></th><th>1</th><th>2</th><th>3</th><th>4</th>"
                . "<th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th></tr>";
                for ($i = 0; $i < 10 ; $i++){
                    echo "<tr><th>".($i+1)."</th>";
                        for ($j = 0; $j <10; $j++){
                            if($i == ($fila-1) || $j == ($columna-1)){//Intorduzco la clase green para impirmir en verde si coincide la columna o la fila marcadas
                            echo "<td class='green'>".$matrizNueva[$i][$j]."</td>";
                            } else {
                                echo "<td>".$matrizNueva[$i][$j]."</td>";
                            }
                        }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
        </p>
        </article>
        </section>
        <footer>
            <p  align="center" class="texto"> Página realizada por Ana Holgado Infante. <br>I.E.S. Campanillas. Desarrollo Web en Entorno Servidor.</p>
        </footer>
    </body> 
</html>