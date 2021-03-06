<!DOCTYPE html>
<!--
Capitulo 5 Arrays
Ejercicios de arrays del capitulo 5 de PHP
@author: Jesús Caballero Corpas
-->
<html>
  
  <head>
    <title>Ejercicios PHP Capitulo 5. Arrays</title>
    <meta charset="UTF-8">
    <meta name="author" content="Jesús Caballero Corpas">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  
  <body class="container light-green lighten-4">
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <header class="center-align">
      <h2>Ejercicios PHP Capitulo 5. Arrays</h2>
    </header>
    <section class="card-panel light-green lighten-2">
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 1</h5>
        <div>
          <span>Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
          Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
          almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
          almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
          los tres arrays dispuesto en tres columnas.</span><br><br>
          <form action="ejer01TresArrays.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 2</h5>
        <div>
          <span>Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
          junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.</span><br><br>
          <form action="ejer02MaxMin.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 3</h5>
        <div>
          <span>Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
          elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
          la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
          muestra el contenido del array.</span><br><br>
          <form action="ejer03RotaArray.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 4</h5>
        <div>
          <span>Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
          separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
          cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
          Los números que se han cambiado deben aparecer resaltados de un color diferente.</span><br><br>
          <form action="ejer04CambiaNumeros.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 5</h5>
        <div>
          <span>Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
          año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
          del diagrama se pueden dibujar a base de la concatenación de una imagen.</span><br><br>
          <form action="ejer05Temperaturas.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 6</h5>
        <div>
          <span>Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
          pares de un color y los impares de otro.</span><br><br>
          <form action="ejer06NumerosColores.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 7</h5>
        <div>
          <span>Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
          un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
          array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
          si es necesario.</span><br><br>
          <form action="ejer07OrdenaArrayParImpar.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 8</h5>
        <div>
          <span>Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
          continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
          tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
          de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
          el array resultante.<br>
          Por ejemplo:</span><br><br>
          <table class="bordered striped centered responsive-table">
            <tr><th colspan="10">Array inicial</th></tr>
            <tr><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td>
                <td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
            <tr><td>20</td><td>5</td><td>7</td><td>4</td><td>32</td>
                <td>9</td><td>2</td><td>14</td><td>11</td><td>6</td></tr>
            <tr><td colspan="10"></td></tr>
            <tr><th colspan="10">Array final</th></tr>
            <tr><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td>
                <td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
            <tr><td>5</td><td>7</td><td>2</td><td>11</td><td>20</td>
                <td>4</td><td>32</td><td>9</td><td>14</td><td>6</td></tr>
          </table>
          <br><br>
          <form action="ejer08OrdenaPrimos.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 9</h5>
        <div>
          <span>Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
          continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa
          pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es
          menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de
          la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.
          Al final se debe mostrar el array resultante:</span><br><br>
          <table class="bordered striped centered responsive-table">
            <tr><th colspan="10">Array inicial</th></tr>
            <tr><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td>
                <td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
            <tr><td>20</td><td>5</td><td>7</td><td>4</td><td>32</td>
                <td>9</td><td>2</td><td>14</td><td>11</td><td>6</td></tr>
            <tr><td colspan="5">Posición inicial: 3</td><td colspan="5">Posición final: 7</td></tr>
            <tr><th colspan="10">Array final</th></tr>
            <tr><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td>
                <td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
            <tr><td>6</td><td>20</td><td>5</td><td>7</td><td>32</td>
                <td>9</td><td>2</td><td>4</td><td>14</td><td>11</td></tr>
          </table>
          <br><br>
          <form action="ejer09InicialFinal.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 10</h5>
        <div>
          <span>Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos
          suman según el juego de la brisca. Emplea un array asociativo para obtener los puntos a partir del
          nombre de la figura de la carta. Asegúrate de que no se repite ninguna carta, igual que si las hubieras
          cogido de una baraja de verdad.</span><br><br>
          <form action="ejer10Brisca.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 11</h5>
        <div>
          <span>Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
          Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
          en español y dará la correspondiente traducción en inglés.</span><br><br>
          <form action="ejer11MiniDiccionario.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 12</h5>
        <div>
          <span>Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del ejercicio
          anterior. El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras
          y comprobará si son correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas
          y cuántas erróneas.</span><br><br>
          <form action="ejer12JuegoMiniDiccionario.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 13</h5>
        <div>
          <span>Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos 
          comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede
          repetir ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que se
          cumplan los siguientes requisitos:
          • Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.
          • El mínimo debe aparecer en color azul.
          • El resto de números debe aparecer en color negro.</span><br><br>
          <form action="ejer13ArrayBidimensional.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 14</h5>
        <div>
          <span>Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría
          saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un
          color diferente para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal.
          El tablero cuenta con 64 casillas. Las columnas se indican con las letras de la “a” a la “h” y las filas
          se indican del 1 al 8.</span><br><br>
          <form action="ejer14Alfil.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
      <article class="card-panel black-text text-darken-2 light-green lighten-3">
        <h5>Ejercicio 15</h5>
        <div>
          <span>Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición
          en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener
          números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz
          resultado, ambas con los números convenientemente alineados.</span><br><br>
          <form action="ejer15RotaMatriz.php" method="post">
            <button class="btn waves-effect waves-light green" type="submit" name="action">Ir al ejercicio
              <i class="material-icons right">send</i>
            </button>
          </form>  
        </div>
      </article>
      
    </section>  
  </body>
  
  <footer>
    <p class="center-align">Jesús Caballero Corpas ©</p>
    <div class="footer-copyright">
      <div class="container">
        © 2014 Copyright Text
      </div>
    </div>
  </footer>
  
</html>