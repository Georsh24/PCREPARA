<?php
class ValidadorRegistro{
//Declaracion de variables utilizdas
    private $aviso_inicio;
    private $aviso_cierre;

    private $nombre;
    private $apellidos;
    private $email;
    private $calle;
    private $fracc;
    private $numero;
    private $telefono;
    private $clave;
    private $clave2;

    private $error_nombre;
    private $error_apellidos;
    private $error_email;
    private $error_clave;
    private $error_clave2;
    private $error_calle;
    private $error_fracc;
    private $error_numero;
    private $error_telefono;

//Iniciacio y constructor de variables
public function __construct($nombre, $apellidos, $email, $clave, $clave2, $calle, $fracc, $numero, $telefono){
    $this -> aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
    $this -> aviso_cierre = "</div>";
    $this -> nombre = "";
    $this -> apellidos = "";
    $this -> email = "";
    $this -> clave = "";
    $this -> clave2 = "";
    $this -> calle = "";
    $this -> fracc = "";
    $this -> numero = "";
    $this -> telefono = "";

    $this -> error_nombre = $this -> validar_nombre($nombre);
    $this -> error_apellidos = $this -> validar_apellidos($apellidos);
    $this -> error_email = $this -> validar_email($email);
    $this -> error_clave = $this -> validar_clave($clave);
    $this -> error_clave2 = $this -> validar_clave2($clave, $clave2);
    $this -> error_calle = $this -> validar_calle($calle);
    $this -> error_fracc = $this -> validar_fracc($fracc);
    $this -> error_numero = $this -> validar_numero($numero);
    $this -> error_telefono = $this -> validar_telefono($telefono);
}
//iniciacion
private function variable_iniciada($variable){
    if (isset($variable) && !empty($variable)){
        return true;

    }else{
        return false;
    }
}
// validacion del nombre
private function validar_nombre($nombre){
    if (!$this -> variable_iniciada($nombre)){
       return "Debes esribir un nombre de usuario.";
    }else{
        $this -> nombre = $nombre;
    }
    if (strlen($nombre) < 3 ){
        return "El nombre debe ser mas largo que 6 caracteres.";
    }
    if (strlen($nombre) > 24){
        return "El nombre no puede ocupar mas de 24 caracteres.";
    }
    if(!preg_match("/([A-Z]){1}([a-z])* /",$nombre))  {
        return "El nombre debe contener caracteres de la A a la Z";
    }
    return "";
}
// validacion de appellidos
private function validar_apellidos($apellidos){
    if (!$this -> variable_iniciada($apellidos)){
        return "Debes escribir tus apellidos";
    }else{
        $this -> apellidos = $apellidos;
    }
    if (strlen($apellidos) < 3){
        return " Los apellidos son muy cortos";
    }
    if (strlen($apellidos) > 50){
        return " Apellidos demasiado largos";
    }
    if(!preg_match("/([A-Z]){1}([a-z])* /",$apellidos))  {
        return "El nombre debe contener caracteres de la A a la Z";
    }
    return "";
}
// validacion de correo
private function validar_email($email){
    if (!$this -> variable_iniciada($email)) {
        return "Debes Proporcionar un email.";
    }else{
        $this -> email = $email;
    } 
    if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
  {
      return "Correo Invalido";
  }
    return "";
}
//validacion clave
private function validar_clave($clave){
    if (!$this -> variable_iniciada($clave)){
        return "Debes escribir una contraseña."; 
}
return "";
}
//validacion clave2
private function validar_clave2($clave, $clave2){
    if (!$this -> variable_iniciada($clave)){
        return "Primero debes rellenar la contraseña.";
    }
    
    if (!$this -> variable_iniciada($clave2)){
        return "Debes repetir tu contraseña."; 
}
if ($clave !== $clave2){
    return "Ambas contraseñas deben coincidir.";
}

return "";
}
private function validar_calle($calle){
    if (!$this -> variable_iniciada($calle)) {
        return "Debes Proporcionar una calle.";
    }else{
        $this -> calle = $calle;
    } 
    if (strlen($calle) < 3){
        return "El nombre de la calle es muy corto";
    }
    if (strlen($calle) > 50){
        return "El Nombre de la calle es muy largo";
    }
   // if(!preg_match("/([A-Z])* /",$calle))  {
        //return "Este campo debe contener caracteres de la A a la Z";
    ////}
    return "";
}
private function validar_fracc($fracc){
    if (!$this -> variable_iniciada($fracc)) {
        return "Debes Proporcionar un fraccionamiento.";
    }else{
        $this -> fracc = $fracc;
    } 
    if (strlen($fracc) < 3){
        return "Compruebe este campo";
    }
    if (strlen($fracc) > 50){
        return "Compruebe este campo";
    }
    //if(!preg_match("/([A-Z])* /",$fracc))  {
      //  return "Compruebe este campo";
   // }
    return "";
}
private function validar_numero($numero){
    if (!$this -> variable_iniciada($numero)) {
        return "Debes Proporcionar un numero.";
    }else{
        $this -> numero = $numero;
    } if (strlen($numero) < 2){
        return " Los apellidos son muy cortos";
    }
    if (strlen($numero) > 5){
        return " Apellidos demasiado largos";
    }
    if(preg_match("/([0-9]){1}([0-9])* /",$numero))  {
        return "Compruebe este campo";
    }
    return "";
}
private function validar_telefono($telefono){
    if (!$this -> variable_iniciada($telefono)) {
        return "Debes Proporcionar un numero telefonico.";
    }else{
        $this -> telefono = $telefono;
    } 
    if (strlen($telefono) < 9){
        return "Compruebe este campo";
    }
    if (strlen($telefono) > 10){
        return "Compruebe este campo";
    }
    if(preg_match("/([0-9]){1}([0-9])* /",$telefono))  {
        return "Compruebe este campo";
    }
    return "";
}
public function obterner_nombre(){
    return $this -> nombre;
}

public function obterner_email(){
    return $this -> email;
}
public function obterner_apellidos(){
    return $this -> apellidos;
}
public function obterner_clave(){
    return $this -> clave;
}
public function obterner_clave2(){
    return $this -> clave2;
}
public function obterner_calle(){
    return $this -> calle;
}
public function obterner_fracc(){
    return $this -> fracc;
}
public function obterner_numero(){
    return $this -> numero;
}
public function obterner_telefono(){
    return $this -> telefono;
}



public function obtener_error_nombre(){
    return $this -> error_nombre;
}
public function obtener_error_apellidos(){
    return $this -> error_apellidos;
}
public function obtener_error_email(){
    return $this -> error_email;
}
public function obtener_error_clave(){
    return $this -> error_clave;
}
public function obtener_error_clave2(){
    return $this -> error_clave2;
}
public function obtener_error_calle(){
    return $this -> error_calle;
}
public function obtener_error_fracc(){
    return $this -> error_fracc;
}
public function obtener_error_nuemro(){
    return $this -> error_numero;
}
public function obtener_error_telefono(){
    return $this -> error_telefono;
}
public function mostrar_nombre(){
    if ($this -> nombre !== ""){
        echo 'value="' . $this -> nombre .'"';
    }
}
public function mostrar_apellidos(){
    if ($this -> apellidos !== ""){
        echo 'value="' . $this -> apellidos . '"';
    }
}
public function mostrar_email(){
    if ($this -> email !== ""){
        echo 'value="' . $this -> email . '"';
    }
}
public function mostrar_calle(){
    if ($this -> calle !== ""){
        echo 'value="' . $this -> calle . '"';
    }
}
public function mostrar_fracc(){
    if ($this -> fracc !== ""){
        echo 'value="' . $this -> fracc . '"';
    }
}
public function mostrar_numero(){
    if ($this -> numero !== ""){
        echo 'value="' . $this -> numero . '"';
    }
}
public function mostrar_telefono(){
    if ($this -> telefono !== ""){
        echo 'value="' . $this -> telefono . '"';
    }
}
public function mostrar_clave(){
    if ($this -> clave !== ""){
        echo 'value="' . $this -> clave . '"';
    }
}
public function mostrar_clave2(){
    if ($this -> clave2 !== ""){
        echo 'value="' . $this -> clave2 . '"';
    }
}
public function mostrar_error_nombre(){
    if ($this -> error_nombre !== ""){
        echo $this -> aviso_inicio . $this -> error_nombre . $this -> aviso_cierre; 
    }
}
public function mostrar_error_apellidos(){
    if ($this -> error_apellidos !== ""){
        echo $this -> aviso_inicio . $this -> error_apellidos .$this -> aviso_cierre;
    }
}
public function mostrar_error_email(){
    if ($this -> error_email !== ""){
        echo $this -> aviso_inicio . $this -> error_email .$this -> aviso_cierre;
    }
}
public function mostrar_error_clave(){
    if ($this -> error_clave !== ""){
        echo $this -> aviso_inicio . $this -> error_clave .$this -> aviso_cierre;
    }
}
public function mostrar_error_clave2(){
    if ($this -> error_clave2 !== ""){
        echo $this -> aviso_inicio . $this -> error_clave2 .$this -> aviso_cierre;
    }
}
public function mostrar_error_calle(){
    if ($this -> error_calle !== ""){
        echo $this -> aviso_inicio . $this -> error_calle .$this -> aviso_cierre;
    }
}
public function mostrar_error_fracc(){
    if ($this -> error_fracc !== ""){
        echo $this -> aviso_inicio . $this -> error_fracc .$this -> aviso_cierre;
    }
}
public function mostrar_error_numero(){
    if ($this -> error_numero !== ""){
        echo $this -> aviso_inicio . $this -> error_numero .$this -> aviso_cierre;
    }
}
public function mostrar_error_telefono(){
    if ($this -> error_telefono !== ""){
        echo $this -> aviso_inicio . $this -> error_telefono .$this -> aviso_cierre;
    }
}
public function registro_valido(){
    if ($this -> error_nombre === "" &&
     $this -> error_email === "" &&
     $this -> error_clave === "" &&
     $this -> error_clave2 === "" &&
     $this -> error_calle === "" &&
     $this -> error_fracc === "" &&
     $this -> error_numero === "" &&
     $this -> error_telefono === ""){
         return true;
     }else{
         return false;
     }
}
}