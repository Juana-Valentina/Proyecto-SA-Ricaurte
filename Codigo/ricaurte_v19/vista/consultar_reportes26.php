<?php
    require("../controlador/conexionBaseDatos.php");
    require("../controlador/administrativo.php");

    extract ($_REQUEST);

    $objConexion = Conectarse();

    $Materia = $_REQUEST['Materia'];
    $Curso= $_REQUEST['Curso'];
    $documento = $_REQUEST['Documentos'];

    $fallaConsulta= "SELECT falla from asistencia   "
    $consulta = "SELECT nombre_usuario, registropersona.id_documento FROM asignacion_materia_curso, registropersona WHERE asignacion_materia_curso.id_documento = registropersona.id_documento and asignacion_materia_curso.id_materia = '$Materia' AND nombre_curso = '$Curso' and nombre_rol = 'Estudiante' order by nombre_usuario ASC";

    $resultado=$objConexion->query($consulta);

    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Reporte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/consultar_reportes26.css">
</head>
    <body>

        <div class="container">
                <h6>Curso: 6-01</h6> <h6>Materia: Biología</h6>
                <h6>Fecha: 20/09/2023</h6>

            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Documento</th>
                    <th>Nombres y apellidos</th>
                    <th>Falla</th>
                    </tr>
                    <?php
        while ($registro = $resultado->fetch_object()) {
            ?>
            <tr bgcolor="#f4f4f4 ">
                <td><?php  echo  $registro->id_documento?></td>
                <td><?php  echo  $registro->nombre_usuario?></td>
            </tr>
        <?php
        }
        ?></th>
                </thead>
            </table>    
            <a href="../vista/gestionar_reportes.php?Identificacion=<?php echo $documento ?>" class="btn btn-danger" id="cancelarBtn">Regresar</a>
        </div>
    </body>
</html>