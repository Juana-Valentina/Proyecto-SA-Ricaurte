<!-- INGRESO CURSOS A LA BASE DE DATOS -->

<?php

    include("conexionBaseDatos.php");

    $Conexion=Conectarse();

    $CursoN = $_POST['nombreCurso'];

    $SQL = "INSERT INTO curso (nombre_curso) VALUES ('$CursoN')";

    if($Conexion->query($SQL)){
        header("location: ../vista/curso.php"); 
    }
    else{
        header("location: ../vista/iniciar_sesion_administradores12.php"); 
    }

?>
<!-- FIN INGRESO CURSOS A LA BASE DE DATOS -->

<!-- INGRESO MATERIAS A LA BASE DE DATOS -->
<?php

    $MateriaN = $_POST['nombreMateria'];

    $SQL1 = "INSERT INTO materia (nombre_materia) VALUES ('$MateriaN')";

    if($Conexion->query($SQL1)){
        header("location: ../vista/materias.php"); 
    }
    else{
        header("location: ../vista/iniciar_sesion_administradores12.php"); 
    }

?>
<!-- FIN INGRESO MATERIAS A LA BASE DE DATOS -->