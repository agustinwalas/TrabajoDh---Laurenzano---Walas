<?php
session_start();
if (isset($_COOKIE['id'])) {
    $_SESSION['id'] = $_COOKIE['id'];
}
function existeEmail($email){
    $todosPHP = traerTodos();
    foreach ($todosPHP as $usuario) {
        if ($email == $usuario['email']) {
            return $usuario;
        }
    }
    return false;
}
function validar($datos,$nombreInputDelFile){
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
function traerUltimoID(){
    $todos = traerTodos();
    if (count($todos) == 0) {
        return 1;
    }
    $ultimoUsuario = array_pop($todos);
    $proximoID = $ultimoUsuario['id'] + 1;
    return $proximoID;
}
function crearUsuario($datos){
    $usuario = [
        'nombre' => $datos['nombre'],
        'email' => $datos['email'],
        'provincia' => $datos['provincia'],
        'pass' => password_hash($datos['pass'],PASSWORD_DEFAULT),
        'id' => traerUltimoID(),
    ];
    return $usuario;
}
function guardarUsuario($user){
    $usuarioAJSON = json_encode($user);
    file_put_contents('usuario.json',$usuarioAJSON . PHP_EOL, FILE_APPEND);
}
function guardarFoto($nombreInputDelFile,$email){
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
function traerTodos(){
    $usuariosJSON = file_get_contents('usuario.json');
    $usuariosJSONArray = explode(PHP_EOL, $usuariosJSON);
    array_pop($usuariosJSONArray);
    $usuariosArrayPHP = [];
    foreach ($usuariosJSONArray as $usarioJSON) {
        $usuariosArrayPHP[] = json_decode($usarioJSON,true);
    }
    return $usuariosArrayPHP;
}
function traerPorID($id){
    $todos = traerTodos();
    foreach ($todos as $usuario) {
        if ($usuario['id'] == $id) {
            return $usuario;
        }
    }
    return false;
}
function validarLogin($datos){
    $errores = [];
    $email = trim($datos['email']);
    $pass = trim($datos['pass']);
    if ($email == '' || $pass == '') {
        $errores['email'] = 'completar los campos';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'Por favor completá tu email con un formato valido';
    }elseif (!$usuario = existeEmail($email)) {
        $errores['email'] = 'El mail ingresado es incorrecto';
    }else {
        if (!password_verify($pass, $usuario['pass'])) {
            $errores['email'] = 'Contraseña incorrecta';
        }
    }
    return $errores;
}
function loguear($usuario){
    $_SESSION['id'] = $usuario['id'];
    header('location:Logeado.php');
}
function estaLogueado(){
    return isset($_SESSION['id']);
}

































 ?>
