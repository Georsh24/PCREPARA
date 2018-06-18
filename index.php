<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

Conexion :: abrir_conexion();
$total_usuarios = RepositorioUsuario :: obtener_numero_usuarios(Conexion::obtener_conexion()); 
Conexion :: cerrar_conexion();
?>


<!DOCTYPE html>
<html>
<head>
  <title>PcRepara</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquerty.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="icomoon/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kalam|Shadows+Into+Light" rel="stylesheet">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fuid encabezado" style="background-color: #ff4040;color:#fff;height:20%;">
  
  <div><a><img class="imglogo" src="Pcrepara Logo.png" width="100"></a></div>
    
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand textencabezado" href="#">PCREPARA</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a class="textencabezado" href="#section1">Inicio</a></li>
          <li><a class="textencabezado" href="#section2">Promociones</a></li>
          <li><a class="textencabezado" href="#section3">Nuestro Equipo</a></li>
          <li><a class="textencabezado" href="#section41">Contactanos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li>
        <a class="textencabezado" href="">
          Usuarios registrados:
          <?php
          echo $total_usuarios;
          ?>

        </a>
        </li>
            <li><a class="textencabezado" href="">Iniciar Sesion</a></li>
            <li><a class="textencabezado" href="">Registro</a></li>

        </ul> 
      </div>
    </div>
  </div>
</nav>    
<!--Aqui esta el inicio que ocntiene un slider-->
<div id="section1" class="container-fluid">
  <div class="container"> 
    <h1>Inicio</h1>
      
    <div class="container imginicio">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
    
          <div class="item active imginicio">
            <img src="2.jpg" alt="Los Angeles" style="width:100%; height: 500px;">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>LA is always so much fun!</p>
            </div>
          </div>
    
          <div class="item imginicio">
            <img src="3.jpg" alt="Chicago" style="width:100%; height: 500px;">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
        
          <div class="item imginicio">
            <img src="2.jpg" alt="New York" style="width:100%; height: 500px;">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
      
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="cotainer">
      <div class="contextmov">
        <p class="textp">PC Repara es</p>
        <ul class="textul">
          <li class="textli">Seguridad</li>
          <li class="textli">Calidad</li>
          <li class="textli">Precio</li>
        </ul>
        <p class="textp">para nuestros clientes </p>
      </div>
</div>


      </div> 

    </div>
  

<div id="section2" class="container-fluid">
    <div class="container">
  <h1>Promociones</h1> 
   <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"> </span> Busqueda
                </div>
                <div class="panel-body">
                  <div class="form-group">
                  <input type="search" class="form-control" placeholder="¿En que puedo ayudarte?">
                  </div>
                  <button class="form-control">Buscar</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
                </div>
                <div class="panel-body">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
                </div>
                <div class="panel-body">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Ultimas entradas
                </div>
                <div class="panel-body">
                  
                <p style="color: black">Aun no hay entradas! Vuelve mas tarde!</p>
                </div>
              </div>
        </div>
      </div>
    </div>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>
    </div>
<div id="section3" class="container-fluid">
  <div class="container">
      <h1>Nuestro Equipo</h1>
      <div class="w3-row w3-center">
          <div class="w3-col l4  w3-center">
            <div class="w3-container">
              <h2>Desarrollo/Soporte</h2>
                <div class="w3-row">
                  <div class="w3-col s6 w3-center">
                    <div class="w3-card-4" style="width:100%">
                      <img src="avatares/avatar-12.png" alt="Norway" style="width:100%">
                        <div class="w3-container w3-center">
                          <p>Jorge Alejandro Fernández Rivera</p>
                        </div>
                    </div>
                 </div>
                 <div class="w3-col s6 w3-center">
                  <div class="w3-card-4" style="width:100%">
                    <img src="avatares/avatar.png" alt="Norway" style="width:100%">
                      <div class="w3-container w3-center">
                        <p>Jean Loui Rodriguez Gomez</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        
          <div class="w3-col l4  w3-center">
            <div class="w3-container">
              <h2>Desarrollo/Soporte</h2>
                <div class="w3-row">
                  <div class="w3-col s6 w3-center">
                    <div class="w3-card-4" style="width:100%">
                      <img src="avatares/avatar-1.png" alt="Norway" style="width:100%">
                        <div class="w3-container w3-center">
                          <p>Miguel Ibañez</p>
                        </div>
                    </div>
                 </div>
                 <div class="w3-col s6 w3-center">
                  <div class="w3-card-4" style="width:100%">
                    <img src="avatares/avatar-2.png" alt="Norway" style="width:100%">
                      <div class="w3-container w3-center">
                        <p>Lorenzo Arellano</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="w3-col l4  w3-center">
            <div class="w3-container">
              <h2>Administracion</h2>
                <div class="w3-row">
                  <div class="w3-col s6 w3-center">
                    <div class="w3-card-4" style="width:100%">
                      <img src="avatares/avatar-7.png" alt="Norway" style="width:100%">
                        <div class="w3-container w3-center">
                          <p>Abel Rodríguez Navarro</p>
                        </div>
                    </div>
                 </div>
                 <div class="w3-col s6 w3-center">
                  <div class="w3-card-4" style="width:100%">
                    <img src="avatares/avatar-23.png" alt="Norway" style="width:100%">
                      <div class="w3-container w3-center">
                        <p>Emma Edith Rodríguez</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    <h1>Estamos para servirte!<h1>
    <a href="#section41"><img class="iconc" src="flechaabajo.png"></a>
    <br>
    <br>
    <br>
    <br>
    <br><div class="section4"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</div>


 
</div>
     </div>
     <div id="section41" class="container-fluid">
      <div class=" piecontactanos">
    <h1>Contactanos</h1>
    <div class="col-8">
    <p>© Copyright 2018. Todos los Derechos Reservados. Desarrollado por: </p>
    <p> www.jorgeelchido.com</p>
    <p>Da click en el siguente boton</p>
  </div>
</div>

    <div class="container-icons">
        <a href=""><div class="row-icon icon1"><h4>Google+</h4><label class=""><img class="label1" src="imgcontact/google-plus.png"></label></div></a>
        <a href=""><div class="row-icon icon2"><h4>Youtube</h4><label class=""><img class="label2" src="imgcontact/youtube.png"></label></div></a>
        <a href=""><div class="row-icon icon3"><h4>Instagram</h4><label class=""><img class="label3" src="imgcontact/instagram.png"></label></div></a>
        <a href=""><div class="row-icon icon4"><h4>Whatsapp</h4><label class=" "><img class="label4" src="imgcontact/whatsapp.png"></label></div></a>
        <a href=""><div class="row-icon icon5"><h4>Facebook</h4><label class=" "><img class="label5" src="imgcontact/facebook.png"></label></div></a>
        <a href=""><div class="row-icon icon6"><h4>Ubicacion</h4><label class=" "><img class="label6" src="imgcontact/location.png"></label></div></a>
        
        <h2 class="iconop"><img src="imgcontact/phone-book.png" style="width:50px;"</h2>
   </div>
   
    </div>
</body>
</html>