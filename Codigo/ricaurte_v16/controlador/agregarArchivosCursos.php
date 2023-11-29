<?php
include("conexionBaseDatos.php");
$Conexion = Conectarse();

$CursoN = $_POST['nombreCurso'];

// Verificar si el curso ya existe en la base de datos
$verificarSQL = "SELECT COUNT(*) as count FROM curso WHERE nombre_curso = '$CursoN'";
$resultado = $Conexion->query($verificarSQL);

if ($resultado) {
    $row = $resultado->fetch_assoc();
    $count = $row['count'];

    if ($count > 0) {
        // El curso ya existe, redirigir a la página de error
        header("location: ../vista/Curso.php?error=curso_existente");
    } else {
        // El curso no existe, proceder con la inserción
        $insertarSQL = "INSERT INTO curso (nombre_curso) VALUES ('$CursoN')";
        if ($Conexion->query($insertarSQL)) {
            // Inserción exitosa, redirigir a la página de cursos
            header("location: ../vista/curso.php");
        } else {
            // Error al insertar el curso, redirigir a la página de error
            header("location: ../vista/Curso.php?error=error_insercion");
        }
    }
} else {
    // Error al verificar el curso, redirigir a la página de error
    header("location: ../vista/Curso.php?error=error_verificacion");
}
?>
    