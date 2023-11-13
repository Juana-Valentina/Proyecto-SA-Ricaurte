<?php
require "conexionBaseDatos.php";
extract ($_REQUEST);
$pass=md5($_REQUEST['ContraseñaEs']);

$Conexion=Conectarse();
/* Vamos a realizar el proceso para consultar los usuarios con la condicíon
dada por los valores ingresados en el login y password*/

//Guardamos en una variable la sentencia sql
$sql="select * from seguridad where correo_instituicional = '$_REQUEST[LoginEs]' and contrasena = '$pass'";

//Asignar a una variable el resultado de la consulta
$resultado=$Conexion->query($sql);

//verifico si existe el usuario
$existe = $resultado->num_rows;
if ($existe==1)  //quiere decir que los datos estan bien
{
	header("location: ../vista/gestionar_asistencia_estudiante21.php");	
}
else
{
	header("location:../vista/iniciar_sesion11.php");  //x=1, quiere decir que el usuario no esta registrado
}
?>
