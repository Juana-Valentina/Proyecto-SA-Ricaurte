<?php
    require("../controlador/conexionBaseDatos.php");
    require("../controlador/administrativo.php");

    extract ($_REQUEST);

    $objConexion = Conectarse();

    $Materia = $_REQUEST['Materias'];
    $Curso= $_REQUEST['Cursos'];
    

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
    $fecha =  date("d / m / y");


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/asistencia23.css">
</head>
<body>
    <div class="container">
        
    <p><?php echo "la fecha del dia de hoy es " . $fecha;?> </p>
        <?php 
        while ($cursos = $resultado1->fetch_object()){  
            ?><h2><?php  echo  $cursos->nombre_materia;?></h2><?php
        }
        ?>
        <form method="POST" action="../controlador/ValidarAsistencia.php?Curso=<?php echo $Curso?>&Fecha=<?php echo $fecha ?>&Materias=<?php echo $Materia ?>" name="FormAsistencia">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Documento</th>
                <th>Nombres y apellidos</th>
                <th>Seguimiento</th>
                </tr>
            </thead>
            <tbody id="listaCursos">
                    <?php
                    //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
                    while ($estudiantes = $resultado->fetch_object()) {         
                    ?>
                    <tr bgcolor="#CCCCFF">
                    <td><?php echo $estudiantes->id_documento?></td>
                    <td><?php  echo  $estudiantes->nombre_usuario?></td>
                    <td> <input data-documento-type="<?php echo $estudiantes->id_documento ?>" class="form-check-input" type="checkbox" id="check21" name="check1[]" value="<?php echo $fecha ?>" aria-label="..."></td>
                    </tr>
                    <?php
                        }
                    ?></td>
            </tbody>
        </table>
        <input type="submit"  name="enviarA" id="enviarA" value="enviar">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="vista/JAVASCRIPT/asistencia.js"></script>
</body>
</html>