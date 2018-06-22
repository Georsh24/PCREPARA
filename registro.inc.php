<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Registro';

include_once 'plantillas/doc-inicio.inc.php';
include_once 'plantillas/Barranavegacion.inc.php';
?>


  <div id="section1" class="container-fluid">

    <div class="">
      <h1 class="text-center">Formulario de Registro</h1>

    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                Instrucciones

              </h3>

            </div>
            <div class="panel-body">
              <br>
              <p class="text-justify">
                Para iniciar sesion en PC Repara Introduce los siguientes datos con informacion real esto te servira para gestionar tu cuenta
                te recomendamos usar una contraseña lo suficientemente segura
              </p>
              <br>
              <a href="#">¿Ya tienes cuenta?</a>
              <br>
              <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                Introduce tus datos

              </h3>

            </div>
            <div class="panel-body">
              <form role="form">
                <div class="form-group">
                  <label>Nombre de Usuario</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control">
                </div>

              </form>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div id="section2" class="container-fluid"></div>





  <?php
  include_once "Plantillas/documento-cierre.inc.php";
?>