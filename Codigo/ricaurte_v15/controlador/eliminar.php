<!-- ELIMINAR CURSOS -->

<?php

    include("conexionBaseDatos.php");

    $Conexion=Conectarse();

    $CursoE = $_REQUEST['CursoE'];

    $SQL1 = "DELETE FROM curso WHERE nombre_curso = '$CursoE'";

    if($Conexion->query($SQL1)){
        header("location: ../vista/curso.php"); 
    }
    else{
        header("location: ../vista/iniciar_sesion_administradores12.php"); 
    }
?>

<!-- FIN ELIMINAR CURSOS -->