<?php session_start(); ?>
<!DOCTYPE html>
<!--
Ejercicio 4
Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
con un nombre de usuario y contraseña correctos.

Author: Jose A. Mayo
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <div id="contenedor">
      <?php
        //DECLARACION VARIABLES 
        $_SESSION['usuario'] = "jose";  //declaro una array donde voy introduciendo los numeros
        $_SESSION['password'] = "hola"; 
        $_SESSION['autorizado'] = false;
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if ($_SESSION['usuario'] == $_REQUEST['usuario']) { 
            if ($_SESSION['password'] == $_REQUEST['password']) {
              $_SESSION['autorizado'] = true;
            }
          }
          if ($_SESSION['autorizado'] == true) {
            echo "Acceso autorizado";
          } else {
            echo "Acceso no autorizado, introduzca su usuario y contraseña";
          }
        }

        if ($_SESSION['autorizado'] == false){
?>
          <fieldset>
            <legend>Valida tu usuario y contraseña</legend>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
              <!--<form action="Ej13listaNumeros.php" method="post"> -->
               Usuario:&nbsp;<input type="text" name="usuario" autofocus>
              Password:&nbsp;<input type="password" name="password" autofocus>  
              <input type="submit" value="Continuar">   <!--*OJITO, PONER AQUI EL ECHO**-->
              </form>
          </fieldset>
<?php   } else { ?>
          <fieldset>
            <legend>Menú de opciones</legend>
              <br><a href="Ej1MediaNumeros.php">Ej1 Media de núumeros (funciona)</a> 
              <br><a href="Ej2ParesImparesMediaMayor.php">Ej3 Pares Impares Media Mayor</a> 
              <br><a href="Ej3TotalContadorNumMedia.php">Ej3 Total Contador Media</a> 
              <br><a href="Ej4PassAccesoProgramas.php">Ej4 Password</a> 
          </fieldset>
<?php   }
        
        ?>
    </div>
  </body>
</html>
