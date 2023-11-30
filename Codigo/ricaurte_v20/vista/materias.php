<?php
    require "../controlador/conexionBaseDatos.php";

    extract ($_REQUEST);

    $Conexion = Conectarse();

    $documento = $_REQUEST['Documentos'];

    $sql = "SELECT nombre_materia FROM materia order by nombre_materia asc";

        $resultado = $Conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Horarios de Estudiantes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <!--  archivo CSS  -->
    <link rel="stylesheet" href="CSS/subir_materias_a_cursos34.css">
</head>
<nav class="navbar-dark">
        <a class="navbar-brand" href="../controlador/controlador.php?accion=iniciar_sesion">Inicio</a>
        <a class="navbar-brand" href="perfil.php?Identificacion=<?php echo $documento ?>">Perfil</a>
        <a class="navbar-brand" href="../controlador/controlador.php?accion=salir">Salir</a>
    </nav>
<body class="background">
<div class="container mt-5 content">
        <h1>Subir materias</h1>
        <hr>
<!-- Agregar Materia -->
    <div class="card mt-4">
    <div class="card-header">
        Agregar Materia 
    </div>
    <div class="card-body">
                <form id="formAgregarMateria" METHOD="POST" action="../controlador/agregarArchivosMateria.php?Documentos=<?php echo $documento?>">
                    <div class="form-group">
                        <label for="nombreMateria">Nombre de la Materia</label>
                        <input type="text" class="form-control" id="nombreMateriai" name="nombreMateria" placeholder="Nombre de la Materia">
                    </div>
                    <button type="submit" class="btn btn-custom">Agregar Materia</button>
                </form>
            </div>
</div>

<!-- Lista de Materias -->
    <div class="mt-4">
    <h2>Agregar Materia</h2>
    <table width="100%" border="0" align="center">
            <thead>
                <tr align="center" bgcolor="#FF007A">
                <th class="NombreColumna">Materia</th>
                <th class="NombreColumna">Eliminar</th>
                </tr>
                </thead>
                <tbody id="listaMaterias">
                    <!-- Aquí se cargarán las materias -->
    <?php while ($materias = $resultado->fetch_object()) { ?>
        <tr bgcolor="#f4f4f4 ">
        <td><strong><?php echo $materias->nombre_materia; ?></strong></td>
        <td><a class="btn btn-custom" href="../controlador/eliminarMateria.php?MateriasE=<?php echo $materias->nombre_materia ?>&Documentos=<?php echo $documento?>">Eliminar</a></td>
    </tr>
    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-3">
            <a href="../vista/elegir_subir_archivos.php?Identificacion=<?php echo $documento ?>" class="btn btn-custom" id="cancelarBtn" style="margin-top:3px">Regresar</a>
        </div>
<!-- Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Tu archivo JavaScript personalizado -->
    <script src="JAVASCRIPT/materias.js"></script>
</body>
</html>