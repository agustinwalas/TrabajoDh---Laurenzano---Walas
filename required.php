<?php
session_start();
if(isset($_COOKIE['Id'])){
  $_SESSION['Id'] = $_COOKIE['Id'];
}
require_once('class/repositorio.php');
require_once('class/usuario.php');
require_once('class/validador.php');
require_once('class/autenticador.php');
$repositorio = new Repositorio();
$autenticador = new Autenticador();
$validador = new Validador();
