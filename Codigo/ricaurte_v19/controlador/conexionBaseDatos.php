<?php
function Conectarse()
{
	$Conexion=new mysqli("localhost","root","","asistenciabd");
	
	if ($Conexion->connect_errno) 
		echo "Problemas en la Conexion ". $Conexion->connect_error;
	else
		return $Conexion;
}
?>