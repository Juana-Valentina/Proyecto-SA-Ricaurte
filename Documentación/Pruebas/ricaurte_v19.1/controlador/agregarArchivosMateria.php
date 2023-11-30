<!-- INGRESO MATERIAS A LA BASE DE DATOS -->

<?php
    include("conexionBaseDatos.php");

    $Conexion=Conectarse();

    $MateriaNombre = $_POST['nombreMateria'];
    $documento = $_REQUEST['Documentos'];

    $consulta = "SELECT id_materia FROM materia where nombre_materia = '$MateriaNombre'";
    $resultado = $Conexion->query($consulta);

    $Materias = $resultado->fetch_object();

    $sql5 ="SELECT nombre_materia from materia where nombre_materia = '$MateriaNombre'";

    $resultado5= $Conexion->query($sql5);

    $existe = $resultado5->num_rows;
    
    if ($existe==0){
    $SQL1 = "INSERT INTO materia (nombre_materia) VALUES ('$MateriaNombre')";
    }else{
        header("location:../vista/materias.php?Documentos=$documento"); 
    }
    
    if($Conexion->query($SQL1)){
        header("location: ../vista/materias.php?Documentos=$documento"); 
    }else{
        echo "jueputa";
    }

?>

<!-- FIN INGRESO MATERIAS A LA BASE DE DATOS -->