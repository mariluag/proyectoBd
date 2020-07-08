<?php 
session_start();

include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$titulo =$_REQUEST["titulo"];
$descripcion = $_REQUEST["descripcion"];
$autor = $_REQUEST["autor"];
$fecha = $_REQUEST["fecha"];
$id_categoria =$_REQUEST["id_categoria"];
  
$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];


$qry= "INSERT INTO tabla_blog (titulo, descripcion, autor,fecha, categoria) 
VALUES ('$titulo', '$descripcion','$autor', '$fecha', '$id_categoria')";
$ejecucion = $ejecutar->ejecutar($qry);

$qry="INSERT INTO log_usuario(id_usuario, fuente_log, mensaje_log)
VALUES ('$log_id', 'tabla_blog', CONCAT('El usuario:', ' $log_name', ' ha agregado el registro', ' $titulo'))";
$ejecucion = $ejecutar->ejecutar($qry);

header("Location: index.php")
?>