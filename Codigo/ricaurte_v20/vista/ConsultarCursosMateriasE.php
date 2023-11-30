<?php
    require("../controlador/conexionBaseDatos.php");
    require("../controlador/administrativo.php");

    extract ($_REQUEST);

    $objConexion = Conectarse();

    $documento = $_REQUEST['Documentos'];

    $consulta="SELECT nombre_materia, nombre_curso, materia.id_materia FROM asignacion_materia_curso, materia WHERE asignacion_materia_curso.id_materia = materia.id_materia and nombre_rol ='Profesor' order by nombre_curso asc ";

    $resultado=$objConexion->query($consulta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Cursos y Materias</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="CSS/horario_estudiantes36.css"> -->
    <link rel="stylesheet" href="CSS/anadir_cursos33.css">
</head>


<nav class="navbar-dark">
        <a class="navbar-brand" href="../controlador/controlador.php?accion=iniciar_sesion">Inicio</a>
        <a class="navbar-brand" href="perfil.php?Identificacion=<?php echo $documento ?>">Perfil</a>
        <a class="navbar-brand" href="../controlador/controlador.php?accion=salir">Salir</a>
    </nav>
<body>
    <div class="container">
    <h2>Consultar Cursos y Materias</h2>
    <br>
        <!--<form id="rolForm">
            <div class="form-group">
            </div>
            <a class="btn btn-light" href="../controlador/controlador.php?accion=asistencia" style="background-color: #FF007A; color:aliceblue">Consultar</a>
        </form> -->
        <table width="100%" border="0" align="center">
        <tr align="center" bgcolor="#FF007A">
            <th width="33%" class="NombreColumna">No. Curso</td>
            <th width="33%" class="NombreColumna">Materia</td>
            <th width="33%" class="NombreColumna">Asignar</td>
        </tr>
        <?php
        while ($cursos = $resultado->fetch_object()) {
            ?>
            <tr bgcolor="#f4f4f4 ">
                <td><b><?php  echo  $cursos->nombre_curso?></td>
                <td><b><?php  echo  $cursos->nombre_materia?></td>
                <td align="center"><a href="EstudianteCrud.php?Materias=<?php echo $cursos->id_materia?>&Cursos=<?php echo $cursos->nombre_curso ?>&Documentos=<?php echo $documento ?>"><img src="../Imagenes/editar.jpg"  width="29" height="24" /></a></td>
            </tr>
        <?php
        }
        ?>
    </div>
    
    <!-- Incluye jQuery y los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Incluye el archivo JavaScript personalizado -->
    <script src="vista/JAVASCRIPT/registrar_rol31.js"></script>
    </table>
    <a href="../vista/elegir_subir_archivos.php?Identificacion= <?php echo $documento ?>" class="btn btn-custom" id="cancelarBtn" style="margin-top:19px">Regresar</a>

</body>

</html>
