<!-- ELIMINAR CURSOS -->

<?php
    include("conexionBaseDatos.php");

    $Conexion=Conectarse();


    $HorarioP = $_REQUEST['HorarioP'];
    $MateriaId = $_REQUEST['MateriaId'];
    $documento = $_REQUEST['Documentos'];
    $Curso = $_REQUEST['Curso'];

    $SQL2 = "DELETE FROM asignacion_materia_curso WHERE id_documento = '$HorarioP' and id_materia = '$MateriaId' and nombre_curso = '$Curso'";

    if($Conexion->query($SQL2)){
        header("location: ../vista/HorarioP.php?Documentos=$documento"); 
    }else{
        echo "no se pudo malparido";
    }

?>

