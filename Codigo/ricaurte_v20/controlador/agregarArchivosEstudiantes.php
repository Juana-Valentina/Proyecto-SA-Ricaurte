<?php
    include("conexionBaseDatos.php");

    // Establecer la conexión a la base de datos
    $Conexion = Conectarse();

    // Datos recibidos del formulario
    $Cursos = $_REQUEST['Curso'];
    $Materias = $_REQUEST['Materia'];
    $documento = $_REQUEST['Documentos'];
    $Estudiante = $_POST['IdEstudiante'];

    // Verificar si el estudiante ya está asignado al curso
    $sql_check = "SELECT * FROM asignacion_materia_curso WHERE id_documento = '$Estudiante' AND nombre_curso = '$Cursos'";
    $resultado_check = $Conexion->query($sql_check);

    // Si el estudiante no está asignado al curso, proceder con la inserción
    if ($resultado_check->num_rows == 0) {
        $SQL1 = "INSERT INTO asignacion_materia_curso (id_documento, id_materia, nombre_curso, nombre_rol) VALUES ('$Estudiante', $Materias, '$Cursos', 'Estudiante')";

        // Intentar ejecutar la inserción en la base de datos
        if ($Conexion->query($SQL1)) {
            header("location: ../vista/EstudianteCrud.php?Documentos=$documento&Cursos=$Cursos&Materias=$Materias");
            exit(); // Importante: salir del script después de redireccionar
        } else {
            echo "Error al insertar los datos: " . $Conexion->error;
        }
    } else {
        header("location: ../vista/EstudianteCrud.php?Documentos=$documento&Cursos=$Cursos&Materias=$Materias");
    }
?>
