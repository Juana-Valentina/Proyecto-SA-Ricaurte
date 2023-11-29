<?php
require "conexionBaseDatos.php";
extract ($_REQUEST);
$pass=md5($_REQUEST['ContraseñaEs']);

$Conexion=Conectarse();
/* Vamos a realizar el proceso para consultar los usuarios con la condicíon
dada por los valores ingresados en el login y password*/

//Guardamos en una variable la sentencia sql
$sql="select * from seguridad where correo_instituicional = '$_REQUEST[LoginEs]' and contrasena = '$pass'";
$sql1="select id_documento from seguridad where correo_instituicional = '$_REQUEST[LoginEs]'";

//Asignar a una variable el resultado de la consulta
$resultado=$Conexion->query($sql);
$resultado1=$Conexion->query($sql1);

//verifico si existe el usuario
$existe = $resultado->num_rows;
if ($existe==1)  //quiere decir que los datos estan bien
{
	$documento = $resultado1->fetch_object();
	header("location: ../vista/gestionar_asistencia_estudiante21.php?Documento=$documento->id_documento");	
}
else
{
	header("location:../vista/iniciar_sesion11.php");  //x=1, quiere decir que el usuario no esta registrado
}
?>
