<?php
require "../controlador/conexionBaseDatos.php";

extract ($_REQUEST);

$objConexion=Conectarse();

$sql="update registropersona set id_documento='$_REQUEST[identificacion]', nombre_usuario= '$_REQUEST[fullname]', telefono= '$_REQUEST[phone]'";

$resultado=$objConexion->query($sql);

if ($resultado) {
	header("location: ../vista/perfil.php"); 
}else{
    echo "MAL";
}
?>