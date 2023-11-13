<?php
    extract ($_REQUEST);
    
    require("conexionBaseDatos.php");
    
    $Conexion=Conectarse();

    $Encriptacion = md5($_REQUEST['ContrasenaAd']);

    $sql = "INSERT INTO `registropersona`(id_documento, nombre_usuario, telefono) VALUES ('$_REQUEST[DocumentoAd]','$_REQUEST[NombreAd]','$_REQUEST[NumeroAd]')";
    $sql1 = "INSERT INTO `seguridad`(correo_instituicional, contrasena, id_documento) VALUES ('$_REQUEST[Correo_institucionalAd]','$Encriptacion','$_REQUEST[DocumentoAd]')";
    $sql2 = "INSERT INTO `asignacion_rol`(nombre_rol, id_documento) VALUES ('$_REQUEST[rol]','$_REQUEST[DocumentoAd]')";

    if($Conexion->query($sql)){
        header("location: ../vista/confirmar_correo_institucional.php"); 
    }
    else{
        header("location: ../vista/iniciar_sesion_administradores12.php"); 

    }
    if($Conexion->query($sql1)){
        header("location: ../vista/confirmar_correo_institucional.php"); 
    }
    else{
        header("location: ../vista/iniciar_sesion_administradores12.php"); 

    }
    if($Conexion->query($sql2)){
        header("location: ../vista/confirmar_correo_institucional.php"); 
    }
    else{
        header("location: ../vista/iniciar_sesion_administradores12.php"); 

    }
?>