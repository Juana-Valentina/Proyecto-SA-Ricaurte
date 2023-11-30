<?php
    extract ($_REQUEST);

    require "conexionBaseDatos.php";

    $Conexion=Conectarse();
    
    $Encriptacion = md5($_REQUEST['Contraseña']);

    $rol = "Estudiante";

    $sql = "INSERT INTO `registropersona`(id_documento, nombre_usuario, telefono) VALUES ('$_REQUEST[Documento]','$_REQUEST[Nombre]','$_REQUEST[Telefono]')";
    $sql1 = "INSERT INTO `seguridad`(correo_instituicional, contrasena, id_documento) VALUES ('$_REQUEST[Correo_institucional]','$Encriptacion','$_REQUEST[Documento]')";
    $sql2 = "INSERT INTO `asignacion_rol`(nombre_rol, id_documento) VALUES ('$rol','$_REQUEST[Documento]')";
    if($Conexion->query($sql)){
        header("location: ../vista/iniciar_sesion11.php"); 
    }
    else{
        echo "Lo siento mani no te tocaba";
    }
    if($Conexion->query($sql1)){
        header("location: ../vista/iniciar_sesion11.php"); 
    }
    else{
        echo "Lo siento mani no te tocaba";
    }
    if($Conexion->query($sql2)){
        header("location: ../vista/iniciar_sesion11.php"); 
    }
    else{
        echo "Lo siento mani no te tocaba";
    }
?>