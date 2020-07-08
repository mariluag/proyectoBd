<?php
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();

$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];

$id = $_GET["id"];
$qry= "DELETE FROM categorias WHERE id_categoria = $id";
$ejecucion = $ejecutar->ejecutar($qry);

$qry="INSERT INTO log_usuario(id_usuario, fuente_log, mensaje_log)
VALUES ('$log_id', 'categorias', CONCAT('El usuario:', ' $log_name', ' ha eliminado el registro con id:', ' $id'))";

$ejecucion = $ejecutar->ejecutar($qry);
header("Location: index.php");
?>