<?php
require "../controlador/conexionBaseDatos.php";

extract ($_REQUEST);

$objConexion=Conectarse();

$sql="update registropersona set id_documento='$_REQUEST[Identificacion]', nombre_usuario= '$_REQUEST[fullname]', telefono= '$_REQUEST[phone]' where id_documento='$_REQUEST[Identificacion]'";
$sql1="SELECT * FROM registropersona where id_documento='$_REQUEST[Identificacion]'";

$resultado=$objConexion->query($sql);
$resultado1=$objConexion->query($sql1);

$Datos=$resultado1->fetch_object();
if ($resultado) {
	header("location: ../vista/perfil.php?Identificacion=$Datos->id_documento"); 
}else{
    echo "MAL";
}
?>