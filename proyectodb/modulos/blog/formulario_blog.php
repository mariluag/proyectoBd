<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$consultas = new consultas();
$ejecutar = new mysqlfunciones();
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
     include("../../includes/conexion.php")
   ?>
   <div class="container mt-5">
   <div class="row">
   <div class="col-sm-12">
   
     <form name="formulario"  action="nuevo_blog.php">
  
        <div class="form-group">
        <label class="left full">Titulo</label>
        <input type="text" name="titulo" id="titulo" class="form-control" required placeholder="Ingresa un titulo" />
        </div>
        <input type="hidden" name="id" id="id" class="form-control" required placeholder="Ingresa un titulo" />
       <div class="form-group">
       <label class="left full">Descripción</label>
        <input type="text" name="descripcion" id="descripcion"class="form-control" placeholder="Ingresa tu descripcion" required/>
       </div>
        <div class="form-group">
        <label class="left full">Autor</label>
        <input type="text" name="autor" id="autor" class="form-control" placeholder="Ingresa un autor" required/>
        </div>
        <div class="form-group">

        <label class="left full">Fecha</label>
        <input type="date" name="fecha" id="fecha" class="form-control" required placeholder="Ingresa una fecha" />
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
    <input type="submit" value="Registrar libro" class="btn btn-success">
    </div>
        
              </form>
          </div>
   </div>
   </div>
  

  
<?php include("../../includes/script.php")?>
</body>
</html>