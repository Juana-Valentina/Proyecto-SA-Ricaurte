<?php 

    require "../controlador/conexionBaseDatos.php";
    extract ($_REQUEST);

    $Conexion = Conectarse();

    $documento = $_REQUEST['Documentos'];

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

<header class="menu">
        <div id="container2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="../controlador/controlador.php?accion=iniciar_sesion">Inicio </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="perfil.php?Identificacion=<?php echo $documento ?>">Perfil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../controlador/controlador.php?accion=salir">Salir</a>
            </li>
        </ul>
    </div>
</nav>
            <link rel="stylesheet" href="CSS/header_ricaurte.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </div>
        </header>
<body class="background">
    <div class="container mt-5 content">
        <h1>Agregar Curso </h1>
        <hr>
<!-- Agregar Curso -->
    <div class="card">
    <div class="card-body">
        <form id="formAgregarCurso" METHOD="POST" action="../controlador/agregarArchivosCursos.php?Documentos=<?php echo $documento ?>">
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
<td><a class="btn btn-danger" href="../controlador/eliminarCurso.php?CursoE=<?php echo $cursos->nombre_curso ?>&Documentos=<?php echo $documento?>">Eliminar</a></td>
</tr>
<?php
}
?>
            </tbody>
        </table>

        <a href="../vista/elegir_subir_archivos.php?Identificacion= <?php echo $documento ?>" class="btn btn-danger" id="cancelarBtn">Regresar</a>


    </div>
<!-- Tu archivo JavaScript personalizado -->
    <script src="vista/JAVASCRIPT/anadir_cursos33.js"></script>
</body>
</html>