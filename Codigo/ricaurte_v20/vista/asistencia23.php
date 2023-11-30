<?php
    require("../controlador/conexionBaseDatos.php");
    require("../controlador/administrativo.php");

    extract ($_REQUEST);

    $objConexion = Conectarse();

    $Materia = $_REQUEST['Materias'];
    $Curso= $_REQUEST['Cursos'];
    $documento = $_REQUEST['Documentos'];

    //aqui se guarda para dar el nombre de la materia
    $materia1 ="SELECT nombre_materia from materia where id_materia = '$Materia'";
    $resultado1= $objConexion->query($materia1);

    //aqui se guardar el nombre del usuario para la lista de asistencia
    $consulta = "SELECT nombre_usuario, registropersona.id_documento FROM asignacion_materia_curso, registropersona WHERE asignacion_materia_curso.id_documento = registropersona.id_documento and asignacion_materia_curso.id_materia = '$Materia' AND nombre_curso = '$Curso' and nombre_rol = 'Estudiante' order by nombre_usuario ASC";
    $resultado = $objConexion->query($consulta);

    //aqui es la consulta con el documento y la fecha :D.

    date("a");
    date("m");
    date("Y");
    $fecha =  date("Y / m / d");


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/asistencia23.css">
</head>
<nav class="navbar-dark">
        <a class="navbar-brand" href="../controlador/controlador.php?accion=iniciar_sesion">Inicio</a>
        <a class="navbar-brand" href="perfil.php?Identificacion=<?php echo $documento ?>">Perfil</a>
        <a class="navbar-brand" href="../controlador/controlador.php?accion=salir">Salir</a>
    </nav>
<body>
    <div class="container">
        
    <!-- Inicio registro asistencias -->
    <p><?php echo "la fecha del dia de hoy es " . $fecha;?> </p>
        <?php 
        while ($cursos = $resultado1->fetch_object()){
            ?><h1><?php  echo  $cursos->nombre_materia;?></h1><?php
        }
        ?>
        <form method="POST" action="../controlador/ValidarAsistencia.php?Curso=<?php echo $Curso?>&Fecha=<?php echo $fecha ?>&Materias=<?php echo $Materia ?>&Documentos=<?php echo "$documento" ?>" name="FormAsistencia">
        <table width="100%" border="0" align="center">
            <thead>
            <tr align="center" bgcolor="#FF007A">
                <th class="NombreColumna">Documento</th>
                <th class="NombreColumna">Nombres y apellidos</th>
                <th class="NombreColumna">Asistencia</th>
                </tr>
            </thead>
            <tbody id="listaCursos">
                    <?php
                    //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
                    while ($estudiantes = $resultado->fetch_object()) {         
                    ?>
                    <tr bgcolor="#ffffff">
                    <td><b><?php echo $estudiantes->id_documento?></td>
                    <td><b><?php  echo  $estudiantes->nombre_usuario?></td>
                    <td><input data-documento-type="<?php echo $estudiantes->id_documento ?>" class="form-check-input" type="checkbox" id="check21" name="check1[]" value="<?php echo $estudiantes->id_documento ?>" aria-label="..."></td>
                    </tr>
                    <?php
                    }
                    ?></td>
            </tbody>
        </table>
        <input type="submit"  name="enviarA" id="enviarA" value="enviar" class="btn btn-custom" id="cancelarBtn">
        </form>
    </div>
    <!-- Fin registro asistencias -->

    <!-- Inicio modificacion asistencias -->

    <?php

    
    

    //aqui se guarda para dar el nombre de la materia
    $materia1 ="SELECT nombre_materia from materia where id_materia = '$Materia'";
    $resultado1= $objConexion->query($materia1);

    //aqui se guardar el nombre del usuario para la lista de asistencia
    $consulta = "SELECT nombre_usuario, registropersona.id_documento FROM asignacion_materia_curso, registropersona WHERE asignacion_materia_curso.id_documento = registropersona.id_documento and asignacion_materia_curso.id_materia = '$Materia' AND nombre_curso = '$Curso' and nombre_rol = 'Estudiante' order by nombre_usuario ASC";
    $resultado = $objConexion->query($consulta);

    //aqui se genera la tabla de inasistencias
    $inasistencias = "SELECT asistencia.id_documento, falla, nombre_usuario FROM asistencia, registropersona WHERE asistencia.id_documento = registropersona.id_documento AND asistencia.id_materia = '$Materia' AND nombre_curso = '$Curso' order by nombre_usuario ASC";
    $resultado2 = $objConexion->query($inasistencias);

    //aqui es la consulta con el documento y la fecha :D.

    date("a");
    date("m");
    date("Y");
    $fecha =  date("d / m / y");


?>

    <div class="container">
        
        <h2>Inasistencias</h2>
        <table width="100%" border="0" align="center">
            <thead>
            <tr align="center" bgcolor="#FF007A">
                <th class="NombreColumna">Documento</th>
                <th class="NombreColumna">Nombres y apellidos</th>
                <th class="NombreColumna">Fecha</th>
                <th class="NombreColumna">Eliminar</th>
                </tr>
            </thead>
            <tbody id="listaCursos">
                    <?php
                    //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
                    while ($estudiantesF = $resultado2->fetch_object()) {         
                    ?>
                    <tr bgcolor="#ffffff">
                    <td><b><?php echo $estudiantesF->id_documento?></td>
                    <td><b><?php  echo  $estudiantesF->nombre_usuario?></td>
                    <td><b><?php echo $estudiantesF->falla ?></td>
                    <td align="center"><a href="../controlador/ValidarInasistencia.php?Identificacion=<?php echo $estudiantesF->id_documento?>&Curso=<?php echo $Curso?>&Fecha=<?php echo $estudiantesF->falla?>&Materias=<?php echo $Materia ?>&Documentos=<?php echo $documento ?>"><img src="../Imagenes/eliminar.jpg" width="29" height="24" /></a></td>
                    </tr>
                    <?php
                    }
                    ?></td>
            </tbody>
        </table>
        <div>
        <a href="../vista/gestionar_asistencia_profesor22.php?Identificacion= <?php echo $documento ?>&Cursos=<?php echo $Curso ?>&Materias=<?php echo $Materia ?>" class="btn btn-custom" id="cancelarBtn">Regresar</a>
                </div>
    </div>

    <!-- Fin modificacion asistencias -->


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="vista/JAVASCRIPT/asistencia.js"></script>
</body>
</html>