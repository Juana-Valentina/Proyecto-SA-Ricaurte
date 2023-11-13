<?php
/**
 */
class Administrativo
{

	Private $identificacion;
	private $Conexion;

	//Constructor
	public function Administrativo()
	{
		
	}

	public function getIdentificacion()
	{
		return $this->identificacion;
	}

	public function setIdentificacion($newVal)
	{
		$this->identificacion = $newVal;
	}

	
	// public function crearEmpleado($identificacion,$nombre,$fechaIngreso,$correo,$genero,$cargo)
	// {
	// 	$this->identificacion=$identificacion;
	// 	$this->nombre=$nombre;
	// 	$this->correo=$correo;
	// }
	
	// public function agregarEmpleado()
	// {	
	// 	$this->Conexion=Conectarse();
	// 	$sql="insert into empleados(empIdentificacion,empNombre,empFechaIngreso,empCorreo,empGenero, empCargo)
	// 	values ('$this->identificacion','$this->nombre','$this->fechaIngreso','$this->correo','$this->genero','$this->cargo')";
	// 	$resultado=$this->Conexion->query($sql);
	// 	$this->Conexion->close();
	// 	return $resultado;	
	// }

	public function consultarAdministrativos()
	{
		$this->Conexion=Conectarse();
    	$sql="SELECT seguridad.id_documento FROM seguridad INNER JOIN registropersona ON seguridad.id_documento = registropersona.id_documento where correo_instituicional = '$this->identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	// public function consultarEstudiante($identificacion)
	// {
	// 	$this->Conexion=Conectarse();
    //     $sql="SELECT seguridad.id_documento FROM seguridad INNER JOIN registropersona ON seguridad.id_documento = registropersona.id_documento where correo_instituicional = '$this->identificacion'";
	// 	$resultado=$this->Conexion->query($sql);
	// 	$this->Conexion->close();
	// 	return $resultado;	
	// }

}
?>
