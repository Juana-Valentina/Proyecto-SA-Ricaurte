<?php
    require("../controlador/conexionBaseDatos.php");
    require("../controlador/administrativo.php");

    extract ($_REQUEST);

    $objConexion = Conectarse();

    $documento = $_REQUEST['Documentos'];

    $consulta="SELECT nombre_materia, nombre_curso, materia.id_materia FROM asignacion_materia_curso, materia WHERE asignacion_materia_curso.id_materia = materia.id_materia and nombre_rol ='Profesor' ";

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

    <link rel="stylesheet" href="CSS/gestionar_asistencia_profesor22.css">
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
    <div class="container">
    <h2>Consultar Cursos y Materias</h2>
        <!--<form id="rolForm">
            <div class="form-group">
            </div>
            <a class="btn btn-light" href="../controlador/controlador.php?accion=asistencia" style="background-color: #FF007A; color:aliceblue">Consultar</a>
        </form> -->
        <table width="100%" border="0" align="center">
        <tr align="center" bgcolor="#FF007A">
            <td width="33%">No. Curso</td>
            <td width="33%">Materia</td>
            <td width="33%">Asignar</td>
        </tr>
        <?php
        while ($cursos = $resultado->fetch_object()) {
            ?>
            <tr bgcolor="#f4f4f4 ">
                <td><?php  echo  $cursos->nombre_curso?></td>
                <td><?php  echo  $cursos->nombre_materia?></td>
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
    <br>
    <a href="../vista/elegir_subir_archivos.php?Identificacion= <?php echo $documento ?>" class="btn btn-danger" id="cancelarBtn">Regresar</a>

</body>

</html>
