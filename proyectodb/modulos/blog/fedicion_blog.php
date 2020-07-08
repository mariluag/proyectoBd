<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consultas = new consultas();
$session = $ejecutar->usuarioActivo();
$id_blog = $_GET['id'];
$edicion = $consultas->tb($id_blog);
$resultado = $consultas->categorias();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php")?>
    <title>Document</title>
</head>
<body>
    <?php
    include("../../includes/conexion.php");
    ?>
   <div class="container mt-5">
   <div class="row">
   <div class="col-sm-12">
   
     <form name="form_editar"  action="editar_blog.php" method="POST">
  <?php 
    
   $fila = mysqli_fetch_array($edicion);
    ?>
        <div class="form-group">
        <label class="left full">Titulo</label>
        <input type="hidden" name="id" id="id" class="form-control" required value="<?php echo $fila["id"]?>"/>
        <input type="text" name="titulo" id="titulo" class="form-control" required  value="<?php echo$fila["titulo"]?>"/>
        </div>
       <div class="form-group">
       <label class="left full">Descripción</label>
        <input type="text" name="descripcion" id="descripcion"class="form-control" value="<?php echo$fila["descripcion"]?>" required/>
       </div>
        <div class="form-group">
        <label class="left full">Autor</label>
        <input type="text" name="autor" id="autor" class="form-control"  value="<?php echo$fila["autor"]?>"required/>
        </div>
        <div class="form-group">
        <label class="left full">Fecha</label>
        <input type="date" name="fecha" id="fecha" class="form-control" required value="<?php echo$fila["fecha"]?>" />
        </div>
        <div class="form-group">
        <label class="left full">Categoria</label>
        <select name="id_categoria" id="id_categoria" class="form-control">
        <option value = "0">Selecciona una opción</option>
       <?php
        while ($qry=mysqli_fetch_array($resultado )){ ?>      
           <option value = "<?php echo $qry["id_categoria"];?>"><?php echo $qry["nombre"]?></option>
           <?php }?>
        </select>
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