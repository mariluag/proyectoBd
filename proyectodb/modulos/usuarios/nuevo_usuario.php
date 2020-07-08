<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$nombre =$_REQUEST["nombre"];
$telefono = $_REQUEST["telefono"];
$direccion = $_REQUEST["direccion"]; 
$correo = $_REQUEST["correo"];
$password = $_REQUEST["contraseña"];
$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];

$qry= "INSERT INTO usuarios (nombre, telefono, direccion_usr,correo_usr, password_usr) 
VALUES ('$nombre', '$telefono','$direccion', '$correo', '$password')";
$ejecucion = $ejecutar->ejecutar($qry);


$qry="INSERT INTO log_usuario(id_usuario, fuente_log, mensaje_log)
VALUES ('$log_id', 'usuarios', CONCAT('El usuario:', ' $log_name', ' ha agregado el registro', ' $nombre'))";
$ejecucion = $ejecutar->ejecutar($qry);


header("Location: index.php")
?>