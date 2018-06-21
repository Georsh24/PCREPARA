<?php
Conexion :: abrir_conexion();
$total_usuarios = RepositorioUsuario :: obtener_numero_usuarios(Conexion::obtener_conexion()); 
Conexion :: cerrar_conexion();
?>

<!DOCTYPE html>
<html>
<head>

<?php
if (!isset($titulo) || empty($titulo)){
    $titulo = 'PC Repara';

}
  echo "<title>$titulo</title>";
?>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" href="css/bootstrap.css">
  
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="icomoon/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kalam|Shadows+Into+Light" rel="stylesheet">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
