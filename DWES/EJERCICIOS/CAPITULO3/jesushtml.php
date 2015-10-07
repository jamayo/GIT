<!DOCTYPE html>
<!--
Capitulo 3 If y Switch
Ejercicio 2
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
Ejercicio 9
Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax 2 + bx + c = 0).
Ejercicio 10
Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.
Ejercicio 12
Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
de conocimientos en las diferentes asignaturas del curso.
Ejercicio 13
Escribe un programa que ordene tres números enteros introducidos por teclado.
@author: Jesús Caballero Corpas
-->
<html>
  <head>
    <title>Ejercicios PHP Capitulo 3. If y Switch</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="contenedor">
      <h1>Ejercicios PHP Capitulo 3. If y Switch</h1>
      <div align="center">
        <h2>Ejercicio 2</h2>
        <h3>Introduce una hora del dia</h3>
        <form action="ejer02Horas.php" method="get">
          <input type="number" step="1" min="0" max="23" name="hora">
          <input type="submit" value="Enviar">
        </form>
      </div>
      
      <div align="center">
        <h2>Ejercicio 9</h2>
        <h3>Resolución de ecuaciónes de segundo grado (del tipo ax² + bx + c = 0).</h3>
        <form action="ejer09Ecuacion.php" method="get">
          Introduce las variables:<br>
          a <input type="number" step="1" name="a"> 
          b <input type="number" step="1" name="b"> 
          c <input type="number" step="1" name="c"> 
          <input type="submit" value="Resolver">
        </form>
      </div>
      
      <div align="center">
        <h2>Ejercicio 10</h2>
        <h3>Averigua tu horoscopo</h3>
        <form action="ejer10Horoscopo.php" method="get">
          Introduce tu dia y mes de nacimiento: <br>
          Dia <input type="number" step="1" min="1" max="31" value="01" name="dia">
          Mes <select name="mes">
                <option value="enero">Enero</option>
                <option value="febrero">Febrero</option>
                <option value="marzo">Marzo</option>
                <option value="abril">Abril</option>
                <option value="mayo">Mayo</option>
                <option value="junio">Junio</option>
                <option value="julio">Julio</option>
                <option value="agosto">Agosto</option>
                <option value="septiembre">Septiembre</option>
                <option value="octubre">Octubre</option>
                <option value="noviembre">Noviembre</option>
                <option value="diciembre">Diciembre</option>
              </select>
          <input type="submit" value="Averiguar">
        </form>
      </div>
      
      <div align="center">
        <h2>Ejercicio 12</h2>
        <h3>Cuestionario</h3>
        <form action="ejer12PregCuestionario.html" method="get">
          <input type="submit" value="Comenzar cuestionario">
        </form>
      </div>
      
      <div align="center">
        <h2>Ejercicio 13</h2>
        <h3>Introduce 3 números y los ordenaré</h3>
        <form action="jesus1.php" method="get">
          <input type="number" step="1" name="num1">
          <input type="number" step="1" name="num2">
          <input type="number" step="1" name="num3">
          <input type="submit" value="Ordenar">
        </form>
      </div>
      <p></p>
    </div>
  </body>
  <footer>
    <h3>Jesús Caballero Corpas ©</h3>
  </footer>
</html>