<?php
    extract ($_REQUEST);

    require "conexionBaseDatos.php";

    $Conexion=Conectarse();
    
    $Encriptacion = md5($_REQUEST['Contraseña']);

    $sql = "INSERT INTO `registropersona`(id_documento, nombre_usuario, telefono) VALUES ('$_REQUEST[Documento]','$_REQUEST[Nombre]','$_REQUEST[Telefono]')";
    $sql1 = "INSERT INTO `seguridad`(correo_instituicional, contrasena, id_documento) VALUES ('$_REQUEST[Correo_institucional]','$Encriptacion','$_REQUEST[Documento]')";
    if($Conexion->query($sql)){
        header("location: ../vista/confirmar_correo_institucional.php"); 
    }
    else{
        header("location: ../vista/iniciar_sesion_administradores12.php "); 
    }
    if($Conexion->query($sql1)){
        header("location: ../vista/confirmar_correo_institucional.php"); 
    }
    else{
        header("location: ../vista/iniciar_sesion_administradores12.php"); 
    }
?>