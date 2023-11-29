<?php 

    require "../controlador/conexionBaseDatos.php";

    $Conexion = Conectarse();

    $sql = "SELECT nombre_curso FROM curso";

    $resultado = $Conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegir cursos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <!--  archivo CSS  -->
    <link rel="stylesheet" href="CSS/anadir_cursos33.css">
</head>
<body class="background">
    <div class="container mt-5 content">
        <h1>Agregar Curso </h1>
        <hr>
<!-- Agregar Curso -->
    <div class="card">
    <div class="card-body">
        <form id="formAgregarCurso" METHOD="POST" action="../controlador/agregarArchivos.php">
    <div class="form-group">
        <label for="nombreCurso">Nombre del Curso</label>
        <input type="text" class="form-control" id="nombreCursoi" name="nombreCurso" placeholder="Nombre del Curso">
    </div>
    <button type="submit" class="btn btn-custom">Agregar Curso</button>
</form>
</div>
</div>
<!-- Lista de Cursos -->
    <div class="mt-4">
        <h2>Cursos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
        <tbody id="listaCursos">
<!-- Aquí se cargarán los cursos -->
<?php while ($cursos = $resultado->fetch_object()) {
?>
<tr>
<td><strong><?php echo $cursos->nombre_curso; ?></strong></td>
<td><a class="btn btn-danger" href="../controlador/eliminar.php?CursoE=<?php echo $cursos->nombre_curso ?>">Eliminar</a></td>
</tr>
<?php
}
?>
            </tbody>
        </table>

        <a href="../controlador/controlador.php?accion=regresar_elegir" class="btn btn-danger" id="cancelarBtn">Regresar</a>


    </div>
<!-- Tu archivo JavaScript personalizado -->
    <script src="vista/JAVASCRIPT/anadir_cursos33.js"></script>
</body>
</html>