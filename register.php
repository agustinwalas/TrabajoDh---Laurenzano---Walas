<?php
require_once('funciones.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estiloreg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <title>Registro / Rapi</title>
  </head>
  <body>
    <header>
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
          <div class="listacorta">
              <i style="font-size:24px" class="fa">&#xf0c9;</i>

          </div>
         </div>
      </div>
    </header>
    <?php
    if (estaLogueado()) {
        header('location:logeado.php');
    }

    $provincias = ['Buenos Aires', 'Tucuman', 'Salta','jujuy','cordoba','mendoza'];
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
                header('location:logeado.php');
                exit;
            }


        }

    }

     ?>


     <form style="text-align:center;"  method="post" enctype="multipart/form-data" class="conteiner">
          <div class="form-group">
            <label for="usr">Mail:</label>
            <input type="email" name="email" class="form-control" value="<?=$email?>">
          </div>
          <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <input type="password" name="pass" class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="pwd">Repetir contraseña:</label>
            <input type="password" name="pass2" class="form-control" value="">
          </div>

          <div class="form-group">
                <label for="usr">Nombre y apellido:</label>
                <input type="text" name="nombre" class="form-control" value="<?=$nombre?>">
              </div>
              <div class="item">
              <label for="">Provincia:</label>
              <select class="" name="provincia">
              <option value="">Elegí tu provincia</option>
          <?php foreach ($provincias as $value): ?>
              <?php if ($provincia == $value): ?>
                  <option selected value="<?=$value?>"><?=$value?></option>
              <?php continue;
                      endif; ?>
              <option value="<?=$value?>"><?=$value?></option>
          <?php endforeach; ?>
              </select></div>
              <br>

              <input type="file" name="avatar" value="">
              <br>
              <br>

              <button type="submit" class="btn btn-success">Ingresar</button>


             </form>





  <div class="error-conteiner">
    <?php if (!empty($errores)): ?>
        <ul style="color:red;" class="errores">
            <?php foreach ($errores as $key => $error): ?>
                 <li><?=$error?></li>
                 <br>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
       </div>


<div class="footer">
    <hr> 
  Ya tengo usuario <div class="yatiene"> <a href="login.php">Logeate</a> </div>
</div>



    </body>
    </html>
