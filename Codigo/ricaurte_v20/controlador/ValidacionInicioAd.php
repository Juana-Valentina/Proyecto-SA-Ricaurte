<?php
require "conexionBaseDatos.php";
require "administrativo.php";
extract ($_REQUEST);
$pass=md5($_REQUEST['contrasenaAd']);

// $usuario = $_REQUEST['LoginAd'];
$Conexion=Conectarse();
$objConexion = new Administrativo();
/* Vamos a realizar el proceso para consultar los usuarios con la condicíon
dada por los valores ingresados en el login y password*/

//Guardamos en una variable la sentencia sql
$sql="select * from seguridad where correo_instituicional = '$_REQUEST[LoginAd]' and contrasena = '$pass'";
$sql2="select * from seguridad, asignacion_rol where correo_instituicional = '$_REQUEST[LoginAd]' and seguridad.id_documento = asignacion_rol.id_documento";
$sql3="select id_documento from seguridad where correo_instituicional = '$_REQUEST[LoginAd]'";
//Asignar a una variable el resultado de la consulta
$resultado= $objConexion->consultarAdministrativos();
$resultado1=$Conexion->query($sql);
$resultado2=$Conexion->query($sql2);
$resultado3=$Conexion->query($sql3);
//verifico si existe el usuario
$existe = $resultado1->num_rows;
if ($existe==1)   //quiere decir que los datos estan bien
{
	while ($rol = $resultado2->fetch_object()) {
		$documento = $resultado3->fetch_object();	
		if ($rol->nombre_rol == "Profesor") {
			//$documento = $resultado3->fetch_object();	
			header("location: ../vista/gestionar_asistencia_profesor22.php?Identificacion=$documento->id_documento");	
		}elseif ($rol->nombre_rol == "Coordinacion"){
			header("location: ../vista/gestionar_reportes.php?Identificacion=$documento->id_documento");
		}else{
			header("location: ../vista/elegir_subir_archivos.php?Identificacion=$documento->id_documento");
		}
	}	
}
else
{
	header("location: ../vista/consultar_reportes26.php"); 
}




?>
