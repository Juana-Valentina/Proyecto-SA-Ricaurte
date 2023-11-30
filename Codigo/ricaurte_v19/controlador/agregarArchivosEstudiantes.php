<!-- INGRESO MATERIAS A LA BASE DE DATOS -->

<?php
    include("conexionBaseDatos.php");

    extract ($_REQUEST);

    $Conexion=Conectarse();

    $Cursos = $_REQUEST['Curso'];
    $Materias = $_REQUEST['Materia'];
    $documento = $_REQUEST['Documentos'];
    $Estudiante = $_POST['IdEstudiante'];

    $SQL1 = "INSERT INTO asignacion_materia_curso (id_documento, id_materia, nombre_curso, nombre_rol ) VALUES ('$Estudiante', $Materias, '$Curso', 'Estudiante')";


    if($Conexion->query($SQL1)){
        header("location: ../vista/EstudianteCrud.php?Documentos=$documento &Cursos=$Cursos &Materias=$Materias"); 
    }

?>

<!-- FIN INGRESO MATERIAS A LA BASE DE DATOS -->