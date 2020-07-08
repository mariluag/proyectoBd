<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");
use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php")?>
    <title>Nueva categoria</title>
</head>
<body>
    <?php
     include("../../includes/conexion.php")
   ?>
   <div class="container mt-5">
   <div class="row">
   <div class="col-sm-12">
   
     <form name="formulario"  action="nueva_cat.php">
  
        <div class="form-group">
        <label class="left full">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" required placeholder="Ingresa un nombre" />
        </div>
        <input type="hidden" name="id" id="id" class="form-control" required placeholder="Ingresa un titulo" />
      
    <div class="form-group">
    <input type="submit" value="Registrar categoria" class="btn btn-success">
    </div>
        
              </form>
          </div>
   </div>
   </div>
  

  
<?php include("../../includes/script.php")?>
</body>
</html>