<!DOCTYPE html>
<html lang="es-MX">
<head>
 <?php include("../../includes/header.php")?>
 <title>Detalles</title>
</head>
<body>
  <?php require_once '../../includes/conexion.php'; ?>
  <div class="table-reponsive">
    <table class="table table-stripped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descripción</th>
        <th>Autor</th>
        <th>Estado</th>
       
      </tr>
    </thead>
    <tbody>
      <?php 
      $id = $_GET['id'];
      $qry = "SELECT * FROM tabla_blog WHERE id = $id";
      $resultado = mysqli_query($mysqli, $qry);
      $fila = mysqli_fetch_array($resultado);
      ?>
      <tr>
      <input type="text" name="titulo" value="<?php echo $fila["titulo"]; ?>" />
        <td><?php echo $fila["id"]; ?></td>
        <td><?php echo $fila["titulo"]; ?></td>
        <td><?php echo $fila["descripcion"]; ?></td>
        <td><?php echo $fila["autor"]; ?></td>
        <td><?php echo $fila["fecha"]; ?></td>
        <td><?php echo $fila["status"]; ?></td>
        <td><a href="blog.php">Regresar a la tabla principal</a></td>
      </tr>
    </tbody>
    </table>
  </div>
 <?php include("../../includes/script.php")?>
</body>
</html>