<!-- INGRESO MATERIAS A LA BASE DE DATOS -->

<?php
    include("conexionBaseDatos.php");

    $Conexion=Conectarse();

    $MateriaN = $_POST['nombreMateriaP'];
    $CursoP = $_POST['nombreCursoP'];
    $documentop = $_POST['documentop'];
    $documento = $_REQUEST['Documentos'];

    $consulta = "SELECT * FROM materia where nombre_materia = '$MateriaN'";
    $resultado = $Conexion->query($consulta);

    while($Materias = $resultado->fetch_object()){
    $sql3 = "SELECT id_materia from materia where id_materia ='$Materias->id_materia'";
    $sql4 = "SELECT nombre_curso from curso where nombre_curso ='$CursoP'";
    $sql5 ="SELECT * from asignacion_materia_curso where nombre_curso = '$CursoP' and id_materia = '$Materias->id_materia' and nombre_rol = 'Profesor'";

    $resultado3 = $Conexion->query($sql3);
    $resultado4 = $Conexion->query($sql4);
    $resultado5= $Conexion->query($sql5);

    $Materiasxd = $resultado3->fetch_object();
    $Cursosxd = $resultado4->fetch_object();

    $existe = $resultado5->num_rows;


    if ($existe==0){
        $SQL1 = "INSERT INTO asignacion_materia_curso (id_documento, id_materia, nombre_rol, nombre_curso) VALUES ('$documentop', '$Materiasxd->id_materia', 'Profesor', '$Cursosxd->nombre_curso')";
    }else{
        header("location: ../vista/HorarioP.php?Documentos=$documento"); 
    }
    }
    if($Conexion->query($SQL1)){
        header("location: ../vista/HorarioP.php?Documentos=$documento"); 
    }else{
        echo "no se pudo malparida vida";
    }
    
?>

<!-- FIN INGRESO MATERIAS A LA BASE DE DATOS -->