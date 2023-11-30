<?php 
    require "../controlador/conexionBaseDatos.php";
    require("../controlador/administrativo.php");

    extract($_REQUEST);

    $Conexion = Conectarse();

    $documento = $_REQUEST['Documentos'];

    $sql = "SELECT * FROM asignacion_materia_curso WHERE nombre_rol = 'Profesor'";

    $sql2 = "SELECT * FROM asignacion_materia_curso, materia WHERE asignacion_materia_curso.id_materia = materia.id_materia AND nombre_rol = 'Profesor' ";

    $sql1 = "SELECT nombre_materia FROM materia";

    $resultado = $Conexion->query($sql);
    $resultado1 = $Conexion->query($sql1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Horarios a Profesores</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <!-- Archivo CSS -->
    <link rel="stylesheet" href="CSS/anadir_cursos33.css">
</head>

<body class="background">
    <!-- Barra de navegación -->
    <nav class="navbar-dark">
        <a class="navbar-brand" href="../controlador/controlador.php?accion=iniciar_sesion">Inicio</a>
        <a class="navbar-brand" href="perfil.php?Identificacion=<?php echo $documento ?>">Perfil</a>
        <a class="navbar-brand" href="../controlador/controlador.php?accion=salir">Salir</a>
    </nav>

    <div class="container mt-5 content">
        <h1>Agregar Horarios a Profesores</h1>
        <hr>

        <!-- Agregar Horario -->
        <div class="card">
            <div class="card-body">
                <form id="formAgregarCurso" method="POST" action="../controlador/agregarArchivosProfesores.php?Documentos=<?php echo $documento ?>">
                    <div class="form-group">
                        <label for="documentop">Número de documento del profesor</label>
                        <input type="text" class="form-control" id="documentop" name="documentop" placeholder="Documento">
                        
                        <label for="nombreCursoP">Nombre del Curso</label>
                        <input type="text" class="form-control" id="nombreCursoP" name="nombreCursoP" placeholder="Nombre del Curso">
                        
                        <label for="nombreMateriaP">Nombre de la Materia</label>
                        <input type="text" class="form-control" id="nombreMateriaP" name="nombreMateriaP" placeholder="Nombre de la Materia">
                    </div>
                    <button type="submit" class="btn btn-custom">Agregar horario</button>
                </form>
            </div>
        </div>

        <!-- Lista de Horarios -->
        <div class="mt-4">
            <h2>Horarios</h2>
            <table width="100%" border="0" align="center">
                <thead>
                <tr align="center" bgcolor="#FF007A">
                        <th class="NombreColumna">Documento</th>
                        <th class="NombreColumna">Curso</th>
                        <th class="NombreColumna">Materia</th>
                        <th class="NombreColumna">Eliminar</th>
                    </tr>
                </thead>
                <tbody id="listaHorarios">
                    <!-- Aquí se cargarán los horarios -->
                    <?php while ($profesores = $resultado->fetch_object()) { ?>
                        <tr bgcolor="#f4f4f4 ">
                            <td><strong><?php echo $profesores->id_documento; ?></strong></td>
                            <td><strong><?php echo (!empty($profesores->nombre_curso)) ? $profesores->nombre_curso : "No existe"; ?></strong></td>
                            <td><strong><?php 
                                $sql3 = "SELECT nombre_materia FROM materia WHERE id_materia IN (SELECT id_materia FROM asignacion_materia_curso WHERE id_documento = '$profesores->id_documento' AND id_materia = '$profesores->id_materia')";
                                $resultado3 = $Conexion->query($sql3);
                                $materia = $resultado3->fetch_object();
                                echo (!empty($materia)) ? $materia->nombre_materia : "No existe";
                            ?></td>
                            <td><a class="btn btn-custom" href="../controlador/eliminarHorario.php?HorarioP=<?php echo $profesores->id_documento ?>&MateriaId=<?php echo $profesores->id_materia ?>&Documentos=<?php echo $documento ?>&Curso=<?php echo $profesores->nombre_curso?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <a href="../vista/elegir_subir_archivos.php?Identificacion=<?php echo $documento ?>" class="btn btn-custom" id="cancelarBtn" style="margin-top:19px">Regresar</a>
        </div>

        <!-- Tu archivo JavaScript personalizado -->
        <script src="JAVASCRIPT/HorarioP.js"></script>
    </div>
</body>
</html>
