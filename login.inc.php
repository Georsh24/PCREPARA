<?php
include_once 'app/Conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';

if (isset($_POST['enviar'])){
  $validador = new ValidadorRegistro($_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['clave'], $_POST['clave2'], $_POST['calle'], $_POST['fraccionamiento'], $_POST['numero'], $_POST['telefono']);
  Conexion :: abrir_conexion();


  if ($validador -> registro_valido()){
    $usuario = new Usuario ('', $validador -> obtener_nombre(), $validador -> obtener_apellidos(), $validador -> obtener_email(), $validador -> obtener_clave(), $validador -> obtener_calle(), $validador -> obtener_fraccionamiento(), $validador -> obtener_numero(), $validador -> obtener_telefono(), '','');
    $usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);
    if ($usuario_insertado){
      //redirigir a login
    }
  }
  Conexion :: cerrar_conexion();
}
$titulo = 'Registro';

include_once 'plantillas/doc-inicio.inc.php';
include_once 'plantillas/Barranavegacion.inc.php';
?>