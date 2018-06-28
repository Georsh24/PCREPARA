<?php

class Usuario{

    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $calle;
    private $fraccionamiento;
    private $numero;
    private $telefono;
    private $fecha_registro;
    private $activo;

   public function __construct($id, $nombre, $apellidos, $email, $password, $calle, $fraccionamiento, $numero, $telefono, $fecha_registro, $activo){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> email = $email; 
        $this -> password = $password;
        $this -> calle = $calle;
        $this -> fraccionamiento = $fraccionamiento;
        $this -> numero = $numero;
        $this -> telefono = $telefono;
        $this -> fecha_registro = $fecha_registro;
        $this -> activo = $activo;
   }

   public function obtener_id(){
       return $this -> id;
   }

   public function obtener_nombre(){
       return $this -> nombre;
   }

   public function obtener_apellidos(){
       return $this -> apellidos;
   }

   public function obtener_email(){
       return $this -> email;
   }

   public function obtener_password(){
       return $this -> password;
   }

   public function obtener_calle(){
       return $this -> calle;
   }

   public function obtener_fraccionamiento(){
       return $this -> fraccionamiento;
   }

   public function obtener_numero(){
       return $this -> numero;
   }

   public function obtener_telefono(){
       return $this -> telefono;
   }

   public function obtener_fecha_registro(){
       return $this -> fecha_registro;
   }

   public function obtener_activo(){
       return $this -> activo;
   }

   public function cambiar_nombre($nombre){
        $this -> nombre = $nombre;
   }

   public function cambiar_apellidos($apellidos){
        $this -> apellidos = $apellidos;
   }

   public function cambiar_email($email){
        $this -> email = $email;
   }

   public function cambiar_password($password){
        $this -> password = $password;
   }

   public function cambiar_calle($calle){
        $this -> calle = $calle;
   }

   public function cambiar_fraccionamiento($fraccionamiento){
       $this -> fraccionamiento = $fraccionamiento;
   }

   public function cambiar_numero($numero){
       $this -> numero = $numero;
   }

   public function cambiar_telefono($telefono){
       $this -> telefono = $telefono;
   }

   public function cambiar_activo($activo){
       $this -> activo = $activo;
   }



}
?>