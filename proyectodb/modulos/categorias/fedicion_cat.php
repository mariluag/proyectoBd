<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consultas = new consultas();
$session = $ejecutar->usuarioActivo();
$id_categoria = $_GET['id'];
$edicion = $consultas->idCategorias($id_categoria);

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php")?>
    <title>Editar categoria</title>
</head>
<body>
    <?php
    include("../../includes/conexion.php");
    ?>
   <div class="container mt-5">
   <div class="row">
   <div class="col-sm-12">
   
     <form name="form_editar"  action="editar_cat.php" method="POST">
  <?php 
    
   $fila = mysqli_fetch_array($edicion);
    ?>
        <div class="form-group">
        <label class="left full">Nombre</label>
        <input type="hidden" name="id" id="id" class="form-control" required value="<?php echo $fila["id_categoria"]?>"/>
        <input type="text" name="nombre" id="nombre" class="form-control" required  value="<?php echo$fila["nombre"]?>"/>
        </div>
     
        
        <div class="form-group">
        <label class="left full">Estado</label>
        <input type="text" name="estado" id="estado" class="form-control" required  placeholder="1 es activo: 0 es inactivo"/>
        </div>
     
       
    <div class="form-group">
    <input type="submit" value="Guardar" class="btn btn-success">
    </div>
        
              </form>
          </div>
   </div>
   </div>
  

  
<?php include("../../includes/script.php")?>
</body>
</html>