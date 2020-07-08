<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id = $_POST["id"];
$nombre =$_POST["nombre"];
$estado = $_POST["estado"];


$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];

$qry= "UPDATE categorias SET
nombre='$nombre', 
estatus ='$estado'
WHERE id_categoria='$id'";
$ejecucion = $ejecutar->ejecutar($qry);
print_r($qry);


$qry="INSERT INTO log_usuario(id_usuario, fuente_log, mensaje_log)
VALUES ('$log_id', 'categorias', CONCAT('El usuario:', ' $log_name', ' ha modificado el registro con id:', ' $id'))";
$ejecucion = $ejecutar->ejecutar($qry);

header("Location: index.php")
?>