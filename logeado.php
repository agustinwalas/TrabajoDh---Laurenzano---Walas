<?php require_once('required.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="css/estilologed.css">
    <head>
        <meta charset="utf-8">
        <title>Ya estas logeado</title>
    </head>
    <body>
      <div class="nav-bar">
         <div class="logo">
           <a href="index.php"><img src="diseño/logo.png"></a>
         </div>
         <div class="logoM">
          <a href="index.php"><img src="diseño/logo-mini.png"></a>
         </div>
         <div class="nav-items">
           <ul>

           </ul>


          </div>
         </div>
      </div>
    </header>

      <div class="contenedor">


        Estas logeado.
      <a href="index.php"> Conseguí el auto de tus sueños!!!</a>

        <pre>
        <?php
        if (!$autenticador->estaLogueado()) {
            header('location:index.php');
        }


        ?>
        </pre>

        <a href="logout.php">Cerrar Sesion</a>

      </div>
    </body>
</html>
