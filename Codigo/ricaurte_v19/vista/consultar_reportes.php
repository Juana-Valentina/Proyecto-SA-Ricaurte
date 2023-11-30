<?php
    require("../controlador/conexionBaseDatos.php");
    require("../controlador/administrativo.php");

    extract ($_REQUEST);

    $objConexion = Conectarse();

    $Curso= $_REQUEST['Cursos'];
    $documento = $_REQUEST['Documentos'];
    $idMateria = $_REQUEST['Materias'];
    
    //aqui hago para dar la consulta de las fallas con su fecha cada 14 dias

    //aqui hago una consulta para dar con el nombre de el curso y materia
    $sql1="SELECT distinct nombre_materia, nombre_curso from asignacion_materia_curso , materia where asignacion_materia_curso.id_materia = materia.id_materia and asignacion_materia_curso.id_materia = '$idMateria' AND nombre_curso = '$Curso'";
    $resultado1= $objConexion->query($sql1);

    //aqui hago una consulta para mostrar los nombres de los estudiantes con sus materias
    $consulta = "SELECT nombre_usuario, registropersona.id_documento FROM asignacion_materia_curso, registropersona WHERE asignacion_materia_curso.id_documento = registropersona.id_documento and asignacion_materia_curso.id_materia = '$idMateria' AND nombre_curso = '$Curso' and nombre_rol = 'Estudiante' order by nombre_usuario ASC";

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
        <?php 
        while ($cursos = $resultado1->fetch_object()){
            ?><h2><?php  echo  $cursos->nombre_materia;?></h2><?php
            ?><h2><?php  echo  $cursos->nombre_curso;?></h2><?php
        }
        ?>
<form action="" method="POST">
    
    <div class="row">
        
        <div class="col-md-4">
            
            <div class="form-group">
                <label><b>Del Dia</b></label>
                <input type="date" name="from_date" value="<?php if(isset($_REQUEST['from_date'])){ echo $_REQUEST['from_date']; } ?>" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label><b> Hasta  el Dia</b></label>
                <input type="date" name="to_date" value="<?php if(isset($_REQUEST['to_date'])){ echo $_REQUEST['to_date']; } ?>" class="form-control">
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group">
                <label></label> <br>
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </div>
    <br>
</form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Documento</th>
                    <th>Telefono</th>
                    <th>Nombres y apellidos</th>
                    <th>Falla</th>
                    </tr>
                    <?php
                     if(isset($_REQUEST['from_date']) && isset($_REQUEST['to_date']))
                     {
                         $from_date = $_REQUEST['from_date'];
                         $to_date = $_REQUEST['to_date'];

                         $query = "SELECT a.falla, a.id_documento, r.nombre_usuario , telefono
                         FROM asistencia AS a
                         INNER JOIN asignacion_materia_curso AS amc ON amc.id_documento = a.id_documento
                         INNER JOIN registropersona AS r ON r.id_documento = a.id_documento
                         WHERE a.falla BETWEEN '$from_date' AND '$to_date'
                           AND amc.id_materia = '$idMateria'
                           AND amc.nombre_curso = '$Curso';
                         ";
                         $query_run = mysqli_query($objConexion, $query);

                         if(mysqli_num_rows($query_run) > 0)
                         {
                             foreach($query_run as $fila)
                             {
                                 ?>
                                 <tr>
                                 <td><?php echo $fila['id_documento']; ?></td>
                                 <td><?php echo $fila['telefono']; ?></td>
                                 <td><?php echo $fila['nombre_usuario']; ?></td>
                                 <td><?php echo $fila['falla']; ?></td>
                                </tr>
                                 <?php
                             }
                         }
                         else
                         {
                             ?>
                           
                              <tr>
                             <h3> <?php  echo "No se encontraron resultados"; ?> </h3>
                       <?php
                         }
                     } 
                 ?>
            </tr>
        </th>
                </thead>
            </table>    
            <a href="../vista/gestionar_reportes.php?Identificacion=<?php echo $documento ?>" class="btn btn-danger" id="cancelarBtn">Regresar</a>
        </div>
    </body>
</html>