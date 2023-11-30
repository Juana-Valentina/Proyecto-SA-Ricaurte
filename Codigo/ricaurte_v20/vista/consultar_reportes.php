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
<nav class="navbar-dark">
        <a class="navbar-brand" href="../controlador/controlador.php?accion=iniciar_sesion">Inicio</a>
        <a class="navbar-brand" href="perfil.php?Identificacion=<?php echo $documento ?>">Perfil</a>
        <a class="navbar-brand" href="../controlador/controlador.php?accion=salir">Salir</a>
    </nav>
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
                <label for="from_date"><b>Del Día</b></label>
                <input type="date" id="from_date" name="from_date" value="<?php if(isset($_REQUEST['from_date'])){ echo $_REQUEST['from_date']; } ?>" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-custom" style="margin-left: 86px">Buscar</button>
        <div class="col-md-5">
            <div class="form-group" style="margin-left:68px">
                <label for="to_date"><b>Hasta el día</b></label>
                <input type="date" id="to_date" name="to_date" value="<?php if(isset($_REQUEST['to_date'])){ echo $_REQUEST['to_date']; } ?>"  class="form-control">
            </div>
        </div>
      
            <div class="form-group" style="text-align: left">
                <label></label> 
            </div>
        
    </div>
    <br>
</form>
<table width="100%" border="0" align="center">
        
                <thead>
                <tr align="center" bgcolor="#FF007A">
                    <th class="NombreColumna">Documento</th>
                    <th class="NombreColumna">Telefono</th>
                    <th class="NombreColumna">Nombres y apellidos</th>
                    <th class="NombreColumna">Falla</th>
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
                                 <tr bgcolor="#f4f4f4 ">
                                 <td><b><?php echo $fila['id_documento']; ?></td>
                                 <td><b><?php echo $fila['telefono']; ?></td>
                                 <td><b><?php echo $fila['nombre_usuario']; ?></td>
                                 <td><b><?php echo $fila['falla']; ?></td>
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
            <a href="../vista/gestionar_reportes.php?Identificacion=<?php echo $documento ?>" class="btn btn-custom" id="cancelarBtn" style="margin-top:19px">Regresar</a>
        </div>
        <script src="JAVASCRIPT/consultar_reportes.js"></script>  
    </body>
</html>