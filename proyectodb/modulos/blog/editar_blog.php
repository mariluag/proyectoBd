<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id = $_POST["id"];
$titulo =$_POST["titulo"];
$descripcion = $_POST["descripcion"];
$autor = $_POST["autor"]; 
$fecha = $_POST["fecha"];
$id_categoria =$_POST["id_categoria"];

$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];

$qry= "UPDATE tabla_blog SET
titulo='$titulo', 
descripcion ='$descripcion',
autor = '$autor', 
fecha = '$fecha'
WHERE id='$id'";
$ejecucion = $ejecutar->ejecutar($qry);
print_r($qry);


$qry="INSERT INTO log_usuario(id_usuario, fuente_log, mensaje_log)
VALUES ('$log_id', 'tabla_blog', CONCAT('El usuario:', ' $log_name', ' ha modificado el registro con id:', ' $id'))";
$ejecucion = $ejecutar->ejecutar($qry);

header("Location: index.php")
?>