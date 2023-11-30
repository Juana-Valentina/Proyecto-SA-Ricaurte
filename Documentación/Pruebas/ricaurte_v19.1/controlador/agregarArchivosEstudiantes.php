<!-- INGRESO MATERIAS A LA BASE DE DATOS -->

<?php
    include("conexionBaseDatos.php");

    extract ($_REQUEST);

    $Conexion=Conectarse();

    $Cursos = $_REQUEST['Curso'];
    $Materias = $_REQUEST['Materia'];
    $documento = $_REQUEST['Documentos'];
    $Estudiante = $_POST['IdEstudiante'];

    $sql2="SELECT * from asignacion_materia_curso where nombre_curso='$Cursos'";
    $resultado2 = $Conexion->query($sql2);

    $existe = $resultado2->num_rows;
    if ($existe==0){
    $SQL1 = "INSERT INTO asignacion_materia_curso (id_documento, id_materia, nombre_curso, nombre_rol ) VALUES ('$Estudiante', $Materias, '$Cursos', 'Estudiante')";

    }else{
        "paila mani";
    }
    if($Conexion->query($SQL1)){
        header("location: ../vista/EstudianteCrud.php?Documentos=$documento &Cursos=$Cursos &Materias=$Materias"); 
    }

?>

<!-- FIN INGRESO MATERIAS A LA BASE DE DATOS -->