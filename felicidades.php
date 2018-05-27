<?php require_once('funciones.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        Estas logeado.
      <a href="index.php"> Conseguí el auto de tus sueños!!!</a>

        <pre>
        <?php
        if (!estaLogueado()) {
            header('location:index.php');
        }


        ?>
        </pre>

        <a href="logout.php">Cerrar Sesion</a>
    </body>
</html>
