<?php 

    require "../controlador/conexionBaseDatos.php";

    extract ($_REQUEST);

    $Conexion = Conectarse();

    $Curso = $_REQUEST['Cursos'];
    $Materias = $_REQUEST['Materias'];
    $documento = $_REQUEST['Documentos'];


    $sql = "SELECT * FROM registropersona where id_documento in(select id_documento from asignacion_materia_curso where nombre_rol = 'Estudiante' and nombre_curso= '$Curso' and id_materia = '$Materias')order by nombre_usuario asc";

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

<nav class="navbar-dark">
        <a class="navbar-brand" href="../controlador/controlador.php?accion=iniciar_sesion">Inicio</a>
        <a class="navbar-brand" href="perfil.php?Identificacion=<?php echo $documento ?>">Perfil</a>
        <a class="navbar-brand" href="../controlador/controlador.php?accion=salir">Salir</a>
    </nav>

<body class="background">
    <div class="container mt-5 content">
        <h1>Agregar Estudiantes </h1>
        <hr>
<!-- Agregar Curso -->
    <div class="card">
    <div class="card-body">
        <form id="formAgregarCurso" METHOD="POST" action="../controlador/agregarArchivosEstudiantes.php?Curso=<?php echo $Curso ?>&Materia=<?php echo $Materias?>&Documentos=<?php echo $documento ?>">
    <div class="form-group">
        <label for="nombreCurso">Documento del Estudiante</label>
        <input type="text" class="form-control" id="IdEstudiante" name="IdEstudiante" placeholder="Documento del Estudiante">
    </div>
    <button type="submit" class="btn btn-custom">Agregar Estudiante</button>
</form>
</div>
</div>
<!-- Lista de Cursos -->
    <div class="mt-4">
        <h2>Cursos</h2>
        <table width="100%" border="0" align="center">
            <thead>
            <tr align="center" bgcolor="#FF007A">
                    <th class="NombreColumna">Documento</th>
                    <th class="NombreColumna">Nombre del Estudiante</th>
                    <th class="NombreColumna">Eliminar</th>
                </tr>
            </thead>
        <tbody id="listaCursos">
<!-- Aquí se cargarán los cursos -->
<?php while ($persona = $resultado->fetch_object()) {
?>
<tr bgcolor="#f4f4f4 ">
<td><strong><?php echo $persona->id_documento; ?></strong></td>
<td><strong><?php echo $persona->nombre_usuario; ?></strong></td>
<td><a class="btn btn-custom" href="../controlador/eliminarEstudiante.php?Persona=<?php echo $persona->id_documento ?>&Curso=<?php echo $Curso ?>&Materia=<?php echo $Materias ?>&Documentos=<?php echo $documento ?>">Eliminar</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
<a href="../vista/ConsultarCursosMateriasE.php?Documentos= <?php echo $documento ?>" class="btn btn-custom" id="cancelarBtn" style="margin-top:19px">Regresar</a>


    </div>
<!-- Tu archivo JavaScript personalizado -->
    <script src="JAVASCRIPT/EstudianteCrud.js"></script>
</body>
</html>