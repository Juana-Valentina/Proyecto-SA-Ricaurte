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
$sql2="select * from seguridad, asignacion_rol where correo_instituicional = '$_REQUEST[LoginEs]' and seguridad.id_documento = asignacion_rol.id_documento";

//Asignar a una variable el resultado de la consulta
$resultado=$Conexion->query($sql);
$resultado1=$Conexion->query($sql1);
$resultado2=$Conexion->query($sql2);

//verifico si existe el usuario
$existe = $resultado->num_rows;
if ($existe==1)  //quiere decir que los datos estan bien
{
	while ($rol = $resultado2->fetch_object()) {
		$documento = $resultado1->fetch_object();	
		if ($rol->nombre_rol == "Estudiante") {
			//$documento = $resultado3->fetch_object();	
			header("location: ../vista/gestionar_asistencia_profesor22.php?Identificacion=$documento->id_documento");	
		}else{
			header("location: ../vista/iniciar_sesion11.php");
		}
	}	
}
else
{
	header("location:../vista/iniciar_sesion11.php");  //x=1, quiere decir que el usuario no esta registrado
}
?>
