<!DOCTYPE html> 
<!--Ejercicio 14. Escribe un programa que, dada una posición en un tablero de 
ajedrez, nos diga a qué casillas podría saltar un alfil que se encuentra en esa 
posición. Indícalo de forma gráfica sobre el tablero con un color diferente para
estas casillas donde puede saltar la figura. El alfil se mueve siempre en 
diagonal. El tablero cuenta con 64 casillas. Las columnas se indican con las 
letras de la “a” a la “h” y las filas se indican del 1 al 8.
-->

<html> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="keywords" content="Ejercicios PHP">
	<meta name="author" content="Ana Holgado">
	<title>Aprende PHP - Capitulo V</title>  
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head> 
    
    <body> 
        <header id = "header">
            <h1>APRENDE PHP CON EJERCICIOS</h1>
            <h2><a href= "index.php">CAPITULO V </a></h2>
	</header>
        <nav>
                
	</nav>
        <section>
            <article>
                <h3>Caballo</h3>
                <p>Escribe un programa que, dada una posición en un tablero de 
ajedrez, nos diga a qué casillas podría saltar un alfil que se encuentra en esa 
posición. Indícalo de forma gráfica sobre el tablero con un color diferente para
estas casillas donde puede saltar la figura. El alfil se mueve siempre en 
diagonal. El tablero cuenta con 64 casillas. Las columnas se indican con las 
letras de la “a” a la “h” y las filas se indican del 1 al 8.
                </p>
            </article>
            <article>
                <h3>Ejercicio Resuelto</h3>
                <p> Ajedrez: Caballo</p>
                <p>
                    
                <?php
                if(!isset($_REQUEST['enviar'])){
                    $posX = -100;
                    $posY = -100;
                }else {
                    $posX = $_GET['num']-1;
                    $let = $_GET['let'];
                }
                    
                ?>
                <form action="#" method="get"> 
                   <label> [a-h]</label><input type="text" name ="let"autofocus><br>
                   <label> [1-8]</label><input type="number" step="1" min="1" max="8" name ="num"><br>
                   <br>
                   <input type="submit" name="enviar" value ="Enviar"><br>
                </form>
                </p>
                <br>
                
    </article>
    <article>
        <h3>Resultado</h3>
        <table id="ajedrez">
            <tr><th></th><th>a</th><th>b</th><th>c</th><th>d</th><th>e</th><th>f</th><th>g</th><th>h</th><th></th></tr>
        <?php
            $letras = array("a","b","c","d","e","f","g","h");
            $posY = array_search($let, $letras);
            for ($i = 0; $i < 8; $i++){
                echo "<tr><th>".($i+1)."</th>";
                for ($j = 0; $j < 8 ; $j++){
                    if($i == $posX && $j == $posY){
                      out.print("<td><img src='caballo_negro.png'></td>");
                  } else if ($i == ($posX+2) && $j == ($posY+1)){
                      out.print("<td><img src='caballo_blanco.png'></td>");
                  } else if ($i == ($posX+2) && $j == ($posY-1)){
                      out.print("<td><img src='caballo_blanco.png'></td>");
                  } else if ($i == ($posX-2) && $j == ($posY-1)){
                      out.print("<td><img src='caballo_blanco.png'></td>");
                  } else if ($i == ($posX-2) && $j == ($posY+1)){
                      out.print("<td><img src='caballo_blanco.png'></td>");
                  } else if ($i == ($posX+1) && $j == ($posY+2)){
                      out.print("<td><img src='caballo_blanco.png'></td>");
                  } else if ($i == ($posX+1) && $j == ($posY-2)){
                      out.print("<td><img src='caballo_blanco.png'></td>");
                  } else if ($i == ($posX-1) && $j == ($posY+2)){
                      out.print("<td><img src='caballo_blanco.png'></td>");
                  } else if ($i == ($posX-1) && $j == ($posY-2)){
                      out.print("<td><img src='caballo_blanco.png'></td>");
                  }
                  else {
                    out.print("<td></td>");
                  }
                }
                echo "<th>".($i+1)."</th></tr>";
            }
        ?>
            <tr><th></th><th>a</th><th>b</th><th>c</th><th>d</th><th>e</th><th>f</th><th>g</th><th>h</th><th></th></tr>
        </table>
        </article>
        </section>
        <footer>
            <p  align="center" class="texto"> Página realizada por Ana Holgado Infante. <br>I.E.S. Campanillas. Desarrollo Web en Entorno Servidor.</p>
        </footer>
    </body> 
</html>
for (int j = 1; j <= 8 ; j++){
                  