<!DOCTYPE html>
<?php
include_once("funciones/funciones.php");
include_once("funciones/bd.php");
include_once("funciones/consultas.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consultas = new consultas();
$session = $ejecutar->usuarioActivo();
?>
<html lang="en">
<head>
<?php include_once('includes/header.php')?>
  <title>Secciones</title>
</head>
<body>
  <div class="container">
<div class="row">
  <div class="col-sm-4 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">USUARIOS</h5>
        <a href="modulos/usuarios/index.php" class="btn btn-dark">Ir a Usuarios</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">BLOG</h5>
        <a href="modulos/blog/index.php" class="btn btn-dark ">Ir a Blog</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">CATEGORIAS</h5>
        <a href="modulos/categorias/index.php" class="btn btn-dark ">Ir a Categorias</a>
      </div>
    </div>
  </div>
</div>
</div>


<?php include_once('includes/script.php');?>
</body>
</html>