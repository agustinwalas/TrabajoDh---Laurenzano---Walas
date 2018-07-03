<?php require_once('required.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilolog.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Log in / Rapi</title>
  </head>
  <body>
    <header>
      <div class="nav-bar">
         <div class="logo">
           <a href="index.php"></a>
           <a href="index.php"><img src="diseño/logo.png"></a>
         </div>
         <div class="logoM">
           <a href="index.php"><img src="diseño/logo-mini.png"></a>
         </div>
         <div class="nav-items">

          <div class="listacorta">
              <i style="font-size:24px" class="fa">&#xf0c9;</i>

          </div>
         </div>
      </div>
    </header>
  <div class="logeo">
    <?php

    if ($autenticador->estaLogueado()) {
        header('location:logeado.php');
    }

    $email = '';
    $errores = [];

    if ($_POST) {
        $email = trim($_POST['email']);

        $errores = validarLogin($_POST);

        if (empty($errores)) {
            $user = $repositorio->existeEmail($email);

            if (isset($_POST['recordarme'])) {
                setcookie('id', $user['id'], time() + 3600 * 24 * 30 );
            }
            $usuarioL = new ciennumeros\Clases\Usuario($usuario);
            $usuarioL->setId($usuario['id']);
            $autenticador->logear($usuarioObj);
          exit;
        }

    }

     ?>
<form style="text-align:center;"  method="post" enctype="multipart/form-data" class="conteiner">
     <div class="form-group">
       <label for="usr">Mail:</label>
       <input type="email" name="email" class="form-control" value="<?=$email?>">
     </div>
     <div class="form-group">
       <label for="pwd">contraseña:</label>
       <input type="password" name="pass" class="form-control" value="">
     </div>
        <button type="submit" class="btn btn-success">Ingresar</button>
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

    <p>¿No tenés usuario? <a href="register.php">Registrate</a> </p>





  </body>
</html>
