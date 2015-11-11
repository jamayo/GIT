<!--
Nombre: Ana Holgado
Curso: DAW2
Fecha: 21/10/2015
Turno: 1
-->
<!DOCTYPE html> 
<!--Ejercicio 4. Escribe un programa que genere una secuencia de 5 cartas de la 
baraja española. Se tienen que cumplir las siguientes condiciones: a) No se puede 
repetir ninguna carta y b) O bien el número o bien el palo de la carta que se 
muestra debe coincidir con el de la anterior (salvo en la primera carta que se echa). 

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
                    <li><a href="../MatrizCambioFilasColumnas/ex17aahi2.php">Ejercicio 2</a></li>
                    <li><a href="BarajaNoCoincida/ex17aahi4.php">Ejercicio 4</a></li>
                </ul>
	</nav>
        <section>
            <article>
                <h3>Ejercicio 4</h3>
                <p>Escribe un programa que genere una secuencia de 5 cartas de la 
baraja española. Se tienen que cumplir las siguientes condiciones: a) No se puede 
repetir ninguna carta y b) O bien el número o bien el palo de la carta que se 
muestra debe coincidir con el de la anterior (salvo en la primera carta que se echa).
                </p>
            </article>
            <article>
                <h3>Ejercicio Resuelto</h3>
                <p> 5 Cartas</p>
                <p>
                <?php
                    $palo = array ("copas","oros","espadas","bastos");
                    $figuras = array ("as", "dos",  "tres","cuatro","cinco","seis",
                        "siete", "sota", "caballo", "rey");
                    $i = 0;//contador cartas hechadas
                    do{
                        $existe = false;
                        if($i == 0){//hecho la primera carta
                            $numero = rand(0, 9);
                            $paloNuevo = $palo[rand (0,3)];
                        }else {//de la cuarta a la quinta carta se ejecuta el else
                            $paloNuevo = $arrayBaraja[$i-1]['palo'];//guardo el palo anterior
                            $numero = array_search($arrayBaraja[$i-1]['numero'], $figuras);//guardo el numero anterior
                            $opcion = rand(1,2);//la opcion es elegir entre que continue el palo o el número
                            if($opcion == 1){//conservo el palo
                                $numero = rand(0, 9);
                            }else {//conservo el número
                                $paloNuevo = $palo[rand (0,3)];
                            }
                        }
                        //el siguiente for se puede hacer con un in_array
                        for ($j = 0 ; $j < $i ; $j++){//compruebo si existe la carta
                            if (($arrayBaraja[$j]['numero']== $figuras[$numero]) && ($arrayBaraja[$j]['palo']== $paloNuevo)){
                                echo "Copia";
                                $existe = true;
                            } 
                        }
                        if (!$existe) {
                            $arrayBaraja[$i]['numero'] = $figuras[$numero];//guardo el numero
                            $arrayBaraja[$i]['palo'] = $paloNuevo;//guardo el palo
                            //imprimo la carta
                            echo $arrayBaraja[$i]['numero']." de ".$arrayBaraja[$i]['palo']."<br>";
                            $i++; //aumento el contador
                        }    
                    }while($i < 5);
                    
                ?>
                </p>
                <br>
                

    </article>
    <article>
        <h3>Resultado</h3>
        <p>
        
        </p>
        </article>
        </section>
        <footer>
            <p  align="center" class="texto"> Página realizada por Ana Holgado Infante. <br>I.E.S. Campanillas. Desarrollo Web en Entorno Servidor.</p>
        </footer>
    </body> 
</html>
