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


  <div id="section21" class="container-fluid">

    <div class="">
      <h1 class="text-center">Formulario de Registro</h1>

    </div>


    <div class="container">
      <div class="row">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">
              Instrucciones
            </h3>
          </div>
          <div class="panel-body">
            <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
              <?php
                if (isset($_POST['enviar'])){
                  include_once 'plantillas/registro_validado.inc.php';
                }else{
                  include_once 'plantillas/registro_vacio.inc.php';
                }
                ?>
            </form>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center">
            Instrucciones
          </h3>
        </div>
        <div class="panel-body text-justify">
          <p class="">Por favor revisa con atencion que los datos ingresados sean, correctos de esta manera podremos vrindarte un mejor
            servicio, Gracias Atte: PC Repara</p>

        </div>
      </div>
    </div>
  </div>
  </div>
  <?php
  include_once "Plantillas/documento-cierre.inc.php";
?>