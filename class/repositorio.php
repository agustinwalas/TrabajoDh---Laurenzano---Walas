<?php

class Repositorio{
  private $dsn='mysql:host=localhost;dbname=rapiautos;charset=utf8mb4;port=3306';
  private $usuario='root';
  private $pass='';
  private $error=[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
  private $database;


  public function __construct(){
    try {
      $this->database = new PDO($this->dsn, $this->usuario, $this->pass, $this->error);
    } catch (\Exception $e) {
      echo "Hubo un error: " . $e->getMessage();
      exit;
    }
  }


  public function guardarUsuario($usuario){

      $consulta = $this->database->prepare("INSERT into usuarios
        (nombre, apellido, email, direccion, pass)
         values(:nombre, :email, :provincia, :pass)");
      $consulta->bindValue(":nombre", $usuario->getNombre());
      $consulta->bindValue(":email", $usuario->getEmail());
      $consulta->bindValue(":provincia", $usuario->getprovincia());
      $consulta->bindValue(":pass", $usuario->getPass());
      $consulta->execute();

  	}

public function existeEmail($email){
    $todos = $this->traerTodos();
    foreach ($todos as $user) {
      if ($user['email'] == $email) {
        return $user;
      }
    }

    return false;
  }

public function traerTodos() {
		$consulta='SELECT * FROM usuarios';
    $estadoConsulta = $this->database->prepare($consulta);
    $estadoConsulta->execute();
    $usuarios = $estadoConsulta->fetchAll();

		return $usuarios;
	}

public function traerUltimoID(){
  $consulta='SELECT id FROM usuarios ORDER BY id desc LIMIT 1';
  $estadoConsulta = $this->database->prepare($consulta);
  $estadoConsulta->execute();
  $usuarioid = $estadoConsulta->fetch();

  return $usuarioid;
}




    public function guardarFoto($nombreInputDelFile,$email){
          $errores = [];
          if ($_FILES[$nombreInputDelFile]['error'] === UPLOAD_ERR_OK) {
              $name = $_FILES[$nombreInputDelFile]['name'];
              $ext = pathinfo($name, PATHINFO_EXTENSION);
              if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
                  $archivoReal = $_FILES[$nombreInputDelFile]['tmp_name'];
                  $ubicacion = dirname(__FILE__);
                  $ubicacion = $ubicacion . '/img/';
                  move_uploaded_file($archivoReal, $ubicacion.$email.'.'. $ext);
              }else {
                  return $errores[$nombreInputDelFile] = "extension invalida";
              }
          }
      }

    public function usuarioId($id){
      $consulta='SELECT * FROM usuarios WHERE id = :id';
      $estadoConsulta = $this->database->prepare($consulta);
      $estadoConsulta->bindValue(':id', $id);
      $estadoConsulta->execute();
      $usuarioArray = $estadoConsulta->fetch();
      $usuario = new sprint3\Clases\Usuario($usuarioArray);
      return $usuario;
    }

}




























 ?>
