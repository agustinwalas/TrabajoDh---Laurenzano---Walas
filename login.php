<?php require_once('funciones.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="estilologreg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Log in / Rapi</title>
  </head>
  <body>
    <header>
      <div class="nav-bar">
         <div class="logo">
           <a href="TrabajoDH.php"></a>
           <a href="index.php"><img src="logo.png"></a>
         </div>
         <div class="logoM">
           <a href="index.php"><img src="logo-mini.png"></a>
         </div>
         <div class="nav-items">
           <ul>
             <li> <a href="register.php">Registrate</a> </li>
              <li> <a href="FAQ.php">Faq</a> </li>
             <li> <a href="index.php">Inicio</a> </li>
           </ul>
          <div class="listacorta">
              <i style="font-size:24px" class="fa">&#xf0c9;</i>

          </div>
         </div>
      </div>
    </header>
  <div class="logeo">
    <?php

    if (estaLogueado()) {
        header('location:felicidades.php');
    }

    $email = '';
    $errores = [];

    if ($_POST) {
        $email = trim($_POST['email']);

        $errores = validarLogin($_POST);

        if (empty($errores)) {
            $user = existeEmail($email);

            if (isset($_POST['recordarme'])) {
                setcookie('id', $user['id'], time() + 3600 * 24 * 30 );
            }

            loguear($user);
        }

    }

     ?>
     <br>
     <br>
    <form style="text-align:center;"  method="post" enctype="multipart/form-data">
        <label for="">email</label>
        <input type="text" name="email" value="<?=$email?>">
        <br>
        <br>
        <label for="">pass</label>
        <input type="text" name="pass" value="">
        <br>
        <br>
        <label for="">Recordarme</label>
        <input type="checkbox" name="recordarme">
        <br>
        <br>
        <button type="submit">Loguearse</button>
    </form>

    <?php if (!empty($errores)): ?>
        <ul style="color:red;">
            <?php foreach ($errores as $key => $error): ?>
                 <li><?=$error?></li>
                 <br>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <hr>

    <p>No tenés usuario ? <a href="registrarse.php">Registrate</a> </p>





  </body>
</html>
