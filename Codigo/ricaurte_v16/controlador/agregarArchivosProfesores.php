<!-- INGRESO MATERIAS A LA BASE DE DATOS -->

<?php
    include("conexionBaseDatos.php");

    $Conexion=Conectarse();

    $MateriaN = $_POST['nombreMateriaP'];
    $CursoP = $_POST['nombreCurso'];
    $documentop = $_POST['documentop'];

    $consulta = "SELECT nombre_materia FROM materia";
    $resultado = $Conexion->query($sql);

    while($Materias = $resultado->fetch_object()){
    $sql3 = "SELECT nombre_materia from materia where id_materia ='$Materias->nombre_materia'";
    $resultado3 = $Conexion->query($sql3);
    }

    $SQL1 = "INSERT INTO asignacion_materia_curso (id_documento, id_materia, nombre_rol, nombre_curso) VALUES ('$documentop', '$resultado3', 'Profesor', '$CursoP')";
    
    if($Conexion->query($SQL1)){
        header("location: ../vista/HorarioP.php"); 
    }else{
        echo "no se pudo malparida vida";
    }
?>

<!-- FIN INGRESO MATERIAS A LA BASE DE DATOS -->