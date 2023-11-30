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

    $inasistencias = "SELECT asistencia.id_documento, falla, nombre_usuario FROM asistencia, registropersona WHERE asistencia.id_documento = registropersona.id_documento AND asistencia.id_materia = '$Materia' AND nombre_curso = '$Curso' order by nombre_usuario ASC";
    $resultado2 = $objConexion->query($inasistencias);

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
<body>
    <br><br><br><br><br><br><br><br>
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
                <th>Inasistencia</th>
                </tr>
            </thead>
            <tbody id="listaCursos">
                    <?php
                    //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
                    while ($estudiantes = $resultado2->fetch_object()) {         
                    ?>
                    <tr bgcolor="#CCCCFF">
                    <td><?php echo $estudiantes->id_documento?></td>
                    <td><?php  echo  $estudiantes->nombre_usuario?></td>
                    <td><?php echo $estudiantes->falla ?></td>
                    </tr>
                    <?php
                        }
                    ?></td>
            </tbody>
        </table>
        <div>
        <a href="../vista/gestionar_asistencia_estudiante21.php?Documento= <?php echo $documento ?>" class="btn btn-danger" id="cancelarBtn">Regresar</a>

                    </div>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="vista/JAVASCRIPT/asistencia.js"></script>
</body>
</html>