<?php
    require("../controlador/conexionBaseDatos.php");
    require("../controlador/administrativo.php");

    extract ($_REQUEST);

    $objConexion = Conectarse();

    $Materia = $_REQUEST['Materias'];
    $materia1 ="SELECT nombre_materia from materia where id_materia = '$Materia'";
    $consulta = "SELECT nombre_usuario from registropersona where id_documento in(select id_documento FROM asignacion_materia WHERE id_materia = '$Materia' and nombre_rol = 'Estudiante')";
    
    $resultado1= $objConexion->query($materia1);
    $resultado = $objConexion->query($consulta);
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
 
    <div class="caja">
        <table>
             <tbody>
                <tr>
                    <th id="asistencia" class="col-3">----</th>
                    <th><strong>Asistencia</strong></th>
                    <th id="inasistencia" class="col-3">----</th>
                    <th><strong>Falla</strong></th>
                    <th id="justificado" class="col-3">----</th>
                    <th><strong>Falla justificada</strong></th>
                </tr>
             </tbody>
        </table>
    </div>
    <div class="container">
   <?php
        //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
        while ($cursos = $resultado1->fetch_object()){
            ?><h2><?php  echo  $cursos->nombre_materia;?></h2><?php
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombres y apellidos</th>

                    <td>Lunes</td>
                    <td>Martes</td>
                    <td>Miercoles</td>
                    <td>Jueves</td>
                    <td>Viernes</td>
                    <td>Lunes</td>
                    <td>Martes</td>
                    <td>Miercoles</td>
                    <td>Jueves</td>
                    <td>Observacione</td>
                </tr>
            </thead>
            <tbody id="listaCursos">
                    <?php
                    //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
                    while ($estudiantes = $resultado->fetch_object()) {
                    ?>
                    <tr bgcolor="#CCCCFF">
                    <td><?php  echo  $estudiantes->nombre_usuario?></td>
                    <td>   <input class="form-check-input" type="checkbox" id="success-outlined" value="" aria-label="..."> </td>
                    <td>   <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </td>
                    <td>   <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </td>
                    <td>   <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </td>
                    <td>   <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </td>
                    <td>   <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </td>
                    <td>   <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </td>
                    <td>   <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </td>
                    <td>   <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </td>
                    <td> <input type="text"></td>
                    </tr>
                    <?php
                    }
                    ?> </td>
                   
                    </tr>
                    
                </tr>
            </tbody>
        </table>
        <button class="btn btn-primary" id="btnenviar">ENVIAR</button>
        <button class="btn btn-primary" id="btnmodificar">MODIFICAR</button>

    </div>
    
</body>
</html>