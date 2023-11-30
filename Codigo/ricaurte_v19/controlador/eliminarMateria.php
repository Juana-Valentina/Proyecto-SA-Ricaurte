<!-- ELIMINAR CURSOS -->

<?php

    include("conexionBaseDatos.php");

    $Conexion=Conectarse();

    $MateriasE = $_REQUEST['MateriasE'];
    $documento = $_REQUEST['Documentos'];

    $SQL3 = "DELETE FROM materia WHERE nombre_materia = '$MateriasE'";

    if($Conexion->query($SQL3)){
        header("location: ../vista/materias.php?Documentos=$documento"); 
    }
?>

<!-- FIN ELIMINAR CURSOS

==SQL1
==SQL2
==SQL13

-->