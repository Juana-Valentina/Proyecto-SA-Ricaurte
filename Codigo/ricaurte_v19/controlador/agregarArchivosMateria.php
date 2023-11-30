<!-- INGRESO MATERIAS A LA BASE DE DATOS -->

<?php
    include("conexionBaseDatos.php");

    $Conexion=Conectarse();

    $MateriaN = $_POST['nombreMateria'];
    $documento = $_REQUEST['Documentos'];

    $SQL1 = "INSERT INTO materia (nombre_materia) VALUES ('$MateriaN')";


    if($Conexion->query($SQL1)){
        header("location: ../vista/materias.php?Documentos=$documento"); 
    }

?>

<!-- FIN INGRESO MATERIAS A LA BASE DE DATOS -->