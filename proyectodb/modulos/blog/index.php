<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consultas = new consultas();
$session = $ejecutar->usuarioActivo();
$resultado = $consultas->ljblog();

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php")?>
    <title>Lista</title>
</head>
<body>
    <?php
   include("../../includes/conexion.php")
    
    ?>
   <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../cerrarsesion.php" class="btn btn-danger float-right mb-5">Cerrar Sesion</a>
  <a href="formulario_blog.php" class="btn btn-primary float-left mb-5">Nuevo</a>
  </div>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
      <thead>
    <tr>    
    <th> Titulo</th>
    <th>Descripción</th>
    <th>Autor</th>
    <th>Categorias</th>
    <th>Acciones</th>
   
    </tr>
    </thead>
    <tbody>
        <?php
    while ($qry=mysqli_fetch_array($resultado)){ //array: nos trae un arreglo de datos por posiciones, //2: arreglo asociativo podemos ver los campos de los bd
        ?>
        <tr>
        <th><?php echo$qry['titulo'];?></th>
        <th><?php echo$qry['descripcion'];?></th>
        <th><?php echo$qry['autor'];?></th>
        <th><?php echo$qry['nombre_categoria'];?></th>
        <td><a href="fedicion_blog.php?id=<?php echo $qry['id']; ?>">Editar</a>
        <a href="eliminar.php?id=<?php echo $qry['id']; ?>">Eliminar</a>
    </td>
        </tr>
        <?php
    }
        ?>
    </tbody>
    </table>
      </div>
  </div>
  </div>
  </div>


  
<?php include("../../includes/script.php")?>
</body>
</html>