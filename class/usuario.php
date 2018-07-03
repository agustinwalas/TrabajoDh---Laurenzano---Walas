<?php

 class Usuario{
   private $id;
   private $nombre;
   private $email;
   private $provincia;
   private $imagen;
   private $pass;


   public function __construct($datos){
     $this->nombre = $datos['nombre'];
     $this->email = $datos['email'];
     $this->provincia = $datos['provincia'];
     $this->pass =password_hash($datos['pass'], PASSWORD_DEFAULT);
   }

   public function setId($id){
     $this->id = $id;
   }
   public function setNombre($nombre){
     $this->nombre = $nombre;
   }

   public function setEmail($email){
     $this->email = $email;
   }

   public function setprovincia($provincia){
     $this->provincia = $provincia;
   }
   public function setImagen($imagen){
     $this->imagen = $imagen;
   }
   public function setPass($pass){
     $this->pass = $pass;
   }


   public function getId(){
     return $this->id ;
   }

   public function getNombre(){
     return $this->nombre;
   }

   public function getEmail(){
     return $this->email;
   }
   public function getprovincia(){
     return $this->provincia;
   }
   public function getImagen(){
     return $this->imagen;
   }
   public function getPass(){
     return $this->pass;
   }



 }









 ?>
