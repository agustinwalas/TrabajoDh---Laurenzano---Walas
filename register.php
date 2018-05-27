<?php require_once('funciones.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="estilologreg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registro / Rapi</title>
  </head>
  <body>
    <header>
      <div class="nav-bar">
         <div class="logo">
           <a href="index.php"><img src="logo.png"></a>
         </div>
         <div class="logoM">
          <a href="index.php"><img src="logo-mini.png"></a>
         </div>
         <div class="nav-items">
           <ul>

           </ul>
          <div class="listacorta">
              <i style="font-size:24px" class="fa">&#xf0c9;</i>

          </div>
         </div>
      </div>
    </header>
    <?php



    $provincias = ['Buenos Aires', 'Tucuman', 'Salta'];

    $nombre = '';
    $email = '';
    $provincia = '';
    $errores = [];

    if ($_POST) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $provincia = $_POST['provincia'];

        $errores = validar($_POST,'avatar');

        if (empty($errores)) {
            $usuario = crearUsuario($_POST);

            $errores = guardarFoto('avatar',$usuario['email'] );

            if (count($errores) == 0) {
                guardarUsuario($usuario);
                header('location:felicidades.php');
                exit;
            }


        }

    }

     ?>
     <br>
     <br>
    <form style="text-align:center;"  method="post" enctype="multipart/form-data">
        <label for="">nombre</label>
        <input type="text" name="nombre" value="<?=$nombre?>">
        <br>
        <br>
        <label for="">email</label>
        <input type="text" name="email" value="<?=$email?>">
        <br>
        <br>
        <label for="">contraseña</label>
        <input type="text" name="pass" value="">
        <br>
        <br>
        <label for="">repetir contraseña</label>
        <input type="text" name="pass2" value="">
        <br>
        <br>
        <label for="">provincia</label>
        <select class="" name="provincia">
        <option value="">Elegí tu provincia</option>
    <?php foreach ($provincias as $value): ?>
        <?php if ($provincia == $value): ?>
            <option selected value="<?=$value?>"><?=$value?></option>
        <?php continue;
                endif; ?>
        <option value="<?=$value?>"><?=$value?></option>
    <?php endforeach; ?>
        </select>
        <br>
        <br>
        <input type="file" name="avatar" value="">
        <br>
        <br>
        <button class="submit" type="submit">Registrarse</button>
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

Ya tengo usuario <div class="yatiene"> <a href="login.php">Logeate</a> </div>


    </body>
    </html>
