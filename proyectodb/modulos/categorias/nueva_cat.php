<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();

$nombre=$_REQUEST["name"];

$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];

$qry= "INSERT INTO categorias (nombre) 
VALUES ('$nombre')";
$ejecucion = $ejecutar->ejecutar($qry);


$qry="INSERT INTO log_usuario(id_usuario, fuente_log, mensaje_log)
VALUES ('$log_id', 'categorias', CONCAT('El usuario:', ' $log_name', ' ha agregado el registro', ' $nombre'))";
$ejecucion = $ejecutar->ejecutar($qry);


header("Location: index.php")
?>