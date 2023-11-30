<!-- ELIMINAR CURSOS -->

<?php

    include("conexionBaseDatos.php");

    $Conexion=Conectarse();

    $Persona = $_REQUEST['Persona'];

    $documento = $_REQUEST['Documentos'];

    $Curso = $_REQUEST['Curso'];

    $Materia = $_REQUEST['Materia'];

    $SQL1 = "DELETE FROM asignacion_materia_curso WHERE id_documento = '$Persona' and nombre_curso = '$Curso' and id_materia = '$Materia'";

    if($Conexion->query($SQL1)){
        header("location: ../vista/EstudianteCrud.php?Documentos=$documento&Cursos=$Curso&Materias=$Materia");
    }
?>

<!-- FIN ELIMINAR CURSOS

==SQL1
==SQL2
==SQL13

-->