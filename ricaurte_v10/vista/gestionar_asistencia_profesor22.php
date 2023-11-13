<?php
    require("../controlador/conexionBaseDatos.php");
    require("../controlador/administrativo.php");

    extract ($_REQUEST);

    $objConexion = Conectarse();

    $documento = $_REQUEST['Identificacion'];

    $consulta="SELECT nombre_materia, nombre_curso, materia.id_materia FROM asignacion_materia_curso, materia WHERE asignacion_materia_curso.id_materia = materia.id_materia AND id_documento = '$documento'";

    $resultado=$objConexion->query($consulta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar De Asistencia</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/gestionar_asistencia_profesor22.css">
</head>
<body>
    <div class="container">
        <h2>Gestionar Asistencia</h2>
        <!--<form id="rolForm">
            <div class="form-group">
            </div>
            <a class="btn btn-light" href="../controlador/controlador.php?accion=asistencia" style="background-color: #FF007A; color:aliceblue">Consultar</a>
        </form> -->
        <table width="89%" border="0" align="center">
        <tr align="center" bgcolor="#FFFF99">
            <td width="33%">No. Curso</td>
            <td width="33%">Materia</td>
            <td width="33%">Consultar</td>
        </tr>
        <?php
        //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
        while ($cursos = $resultado->fetch_object()) {
            ?>
            <tr bgcolor="#CCCCFF">
                <td><?php  echo  $cursos->nombre_curso?></td>
                <td><?php  echo  $cursos->nombre_materia?></td>
                
                <td align="center"><a href="asistencia23.php?Materias=<?php echo $cursos->id_materia?>&Cursos=<?php echo $cursos->nombre_curso ?>"><img src="../Imagenes/editar.jpg"  width="29" height="24" /></a></td>
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
</body>
</html>
