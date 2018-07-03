<?php

class new_db
{
 protected $pdo;

 public function __construct()
 {
 $this->pdo = new PDO("mysql:host=localhost;", "root", "");
 }

 public function base_datos()
 {

 $crear_db = $this->pdo->query('CREATE DATABASE IF NOT EXISTS rapiautos COLLATE utf8_spanish_ci');
 $use_db = $this->pdo->query('USE 100numerosdb');

 $crear_tabla_usuarios = $this->pdo->query('
 CREATE TABLE IF NOT EXISTS usuarios (

    `id` int(15) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(40) NOT NULL,
    `email` varchar(60) NOT NULL,
    `provincia` varchar(100) NOT NULL,
    `imagen` varchar(100) DEFAULT NULL,
    `pass` varchar(200) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`),

     )');
 }
}

$db = new Crear_db();
$db->base_datos();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Restauracion DB</title>
  </head>
  <body>
    <h1>La base de datos ha sido restaurada.</h1>
  </body>
</html>
