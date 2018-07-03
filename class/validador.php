  <?php

class validar {

    function validarRegister($datos,$nombreInputDelFile){
      $errores = [];
      $nombre = trim($datos['nombre']);
      $email = trim($datos['email']);
      $provincia = $datos['provincia'];
      $pass = trim($datos['pass']);
      $pass2 = trim($datos['pass2']);
      if ($nombre == '') {
          $errores['nombre'] = 'Por favor completá tu nombre';
      }
      if ($email == '') {
          $errores['email'] = 'Por favor completá tu email';
      }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errores['email'] = 'Por favor completá tu email con un formato valido';
      }elseif (existeEmail($email)) {
          $errores['email'] = 'Éste email ya esta registrado';
      }
      if ($pass == '' || $pass2 == '' ) {
          $errores['pass'] = 'Por favor ingresá una contraseña';
      }elseif ($pass != $pass2) {
          $errores['pass'] = 'las contraseñas no coinciden';
      }
      if ($provincia == '') {
          $errores['provincia'] = 'Por favor completá tu provincia';
      }
      return $errores;
    }

    function validarLogin($datos){
          $errores = [];
          $email = trim($datos['email']);
          $pass = trim($datos['pass']);
          $usuario = $repositorio->existeEmail($datos['email']);
          if ($email == '' || $pass == '') {
              $errores['email'] = 'completar los campos';
          }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $errores['email'] = 'Por favor completá tu email con un formato valido';
          }elseif (!$repositorio->existeEmail($email)) {
              $errores['email'] = 'El mail ingresado es incorrecto';
          }else {
              if (!password_verify($pass, $usuario['pass'])) {
                  $errores['email'] = 'Contraseña incorrecta';
              }
          }
          return $errores;
      }



  }


























?>
