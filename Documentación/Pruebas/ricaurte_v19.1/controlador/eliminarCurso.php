<!-- ELIMINAR CURSOS -->

<?php

    include("conexionBaseDatos.php");

    $Conexion=Conectarse();

    $CursoE = $_REQUEST['CursoE'];

    $documento = $_REQUEST['Documentos'];

    $Materia = $_REQUEST['Materia'];

    $SQL1 = "DELETE FROM curso WHERE nombre_curso = '$CursoE'";

    if($Conexion->query($SQL1)){
        header("location: ../vista/curso.php?Documentos=$documento&Cursos=$CursoE&Materias=$Materia");
    }
?>

<!-- FIN ELIMINAR CURSOS

==SQL1
==SQL2
==SQL13

-->