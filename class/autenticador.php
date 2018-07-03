<?php
class Autenticador{
function loguear($usuario){
        $_SESSION['id'] = $usuario->getId();
        header('location:Logeado.php');
}

public function deslogear($usuario){
  session_start();
  setcookie('id', '', time() - 10);
  session_destroy();

  header('location:index.php');
  exit;}

  public function estaLogueado(){
      return isset($_SESSION['id']);
  }


}

 ?>
