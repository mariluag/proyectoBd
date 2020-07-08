<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
//$session = $ejecutar->usuarioActivo();
$id = $_POST['id'];
$nombre =$_POST["nombre"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"]; 
$correo = $_POST["correo"];
$password = $_POST["contraseña"];
$log_usuario= $_SESSION["nombre"];

$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];

$qry= "UPDATE usuarios SET
nombre='$nombre', 
telefono ='$telefono',
direccion_usr = '$direccion', 
correo_usr = '$correo',
password_usr = '$password'
WHERE id_usuario= $id";
$ejecucion = $ejecutar->ejecutar($qry);

$qry="INSERT INTO log_usuario(id_usuario, fuente_log, mensaje_log)
VALUES ('$log_id', 'usuarios', CONCAT('El usuario:', ' $log_name', ' ha modificado el registro con id:', ' $id'))";
$ejecucion = $ejecutar->ejecutar($qry);

// echo $qry;
header("Location: index.php")
?>