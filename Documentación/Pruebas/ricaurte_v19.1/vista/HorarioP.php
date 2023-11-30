<?php 
    require "../controlador/conexionBaseDatos.php";
    require("../controlador/administrativo.php");

    extract ($_REQUEST);

    $Conexion = Conectarse();

    $documento = $_REQUEST['Documentos'];

    $sql = "SELECT * FROM asignacion_materia_curso where nombre_rol = 'Profesor'";

    $sql2 = "SELECT * FROM asignacion_materia_curso, materia where asignacion_materia_curso.id_materia = materia.id_materia and nombre_rol = 'Profesor' order by ";

    $sql1 = "SELECT nombre_materia FROM materia";


    $resultado = $Conexion->query($sql);
    $resultado1 = $Conexion->query($sql1);
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
        <h1>Agregar Horarios a Profesores </h1>
        <hr>
<!-- Agregar Curso -->
    <div class="card">
    <div class="card-body">
        <form id="formAgregarCurso" METHOD="POST" action="../controlador/agregarArchivosProfesores.php?Documentos=<?php echo $documento ?>">
    <div class="form-group">
        <label for="nombreCurso">Numero de documento del profesor</label>
        <input type="text" class="form-control" id="documentop" name="documentop" placeholder="Documento">
        <label for="nombreCurso">Nombre del Curso</label>
        <input type="text" class="form-control" id="nombreCursoP" name="nombreCursoP" placeholder="Nombre del Curso">
        <label for="nombreCurso">Nombre de la Materia</label>
        <input type="text" class="form-control" id="nombreMateriaP" name="nombreMateriaP" placeholder="Nombre de la Materia">
    </div>
    <button type="submit" class="btn btn-custom">Agregar horario</button>
</form>
</div>
</div>
<!-- Lista de Cursos -->
    <div class="mt-4">
        <h2>Cursos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id_documento</th>
                    <th>nombre del curso</th>
                    <th>nombre de la materia</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
        <tbody id="listaCursos">
<!-- Aquí se cargarán los cursos -->
<?php while ($profesores = $resultado->fetch_object()) {
?>
<tr>
<td><strong><?php 
echo $profesores->id_documento; ?></strong></td>
<td><strong><?php 
        if(!empty($profesores->nombre_curso)){
        echo $profesores->nombre_curso; 
        }
        else{
            echo"no existe";
        }
        ?></strong></td>
<td><strong>
    <?php 
        $sql3="SELECT nombre_materia from materia where id_materia in(select id_materia from asignacion_materia_curso where id_documento = '$profesores->id_documento' and id_materia = '$profesores->id_materia')";
        $resultado3 = $Conexion->query($sql3);
        $Materiasxd = $resultado3->fetch_object();
        if(!empty($Materiasxd)){
        echo $Materiasxd->nombre_materia;
        }
        else{
            echo"no existe";
        }
?></strong></td>


<td><a class="btn btn-danger" href="../controlador/eliminarHorario.php?HorarioP=<?php echo $profesores->id_documento ?>&MateriaId=<?php echo $profesores->id_materia ?>&Documentos=<?php echo $documento ?>&Curso=<?php echo $profesores->nombre_curso?>">Eliminar</a></td>
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