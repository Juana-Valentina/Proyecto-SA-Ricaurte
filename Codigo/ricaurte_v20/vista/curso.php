<?php 
    require "../controlador/conexionBaseDatos.php";
    extract ($_REQUEST);
    $Conexion = Conectarse();
    $documento = $_REQUEST['Documentos'];
    $sql = "SELECT nombre_curso FROM curso order by nombre_curso desc";
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
    <!-- Archivo CSS personalizado -->
    <link rel="stylesheet" href="CSS/anadir_cursos33.css">
</head>

<body class="background">
    <!-- Barra de navegación -->
    <nav class="navbar-dark">
        <a class="navbar-brand" href="../controlador/controlador.php?accion=iniciar_sesion">Inicio</a>
        <a class="navbar-brand" href="perfil.php?Identificacion=<?php echo $documento ?>">Perfil</a>
        <a class="navbar-brand" href="../controlador/controlador.php?accion=salir">Salir</a>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
</header>

<body>
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
            <table width="100%" border="0" align="center">
                <thead>
                <tr align="center" bgcolor="#FF007A">
                        <th class="NombreColumna">Curso</th>
                        <th class="NombreColumna">Eliminar</th>
                    </tr>
                </thead>
                <tbody id="listaCursos">
                    <!-- Aquí se cargarán los cursos -->
                    <?php while ($cursos = $resultado->fetch_object()) { ?>
                        <tr bgcolor="#f4f4f4 ">
                            <td><strong><?php echo $cursos->nombre_curso; ?></strong></td>
                            <td><a class="btn btn-custom" href="../controlador/eliminarCurso.php?CursoE=<?php echo $cursos->nombre_curso ?>&Documentos=<?php echo $documento?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <a href="../vista/elegir_subir_archivos.php?Identificacion=<?php echo $documento ?>" class="btn btn-custom" id="cancelarBtn" style="margin-top:19px">Regresar</a>
        </div>

        <!-- Tu archivo JavaScript personalizado -->
        <script src="JAVASCRIPT/curso.js"></script>
    </div>
</body>
</html>
