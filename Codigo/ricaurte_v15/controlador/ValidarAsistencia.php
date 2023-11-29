<?php
    require("../controlador/conexionBaseDatos.php");
    extract ($_REQUEST);

    $objConexion = Conectarse();


    $Materia = $_REQUEST['Materias'];
    $Curso= $_REQUEST['Curso'];

    $consulta = "SELECT nombre_usuario, registropersona.id_documento FROM asignacion_materia_curso, registropersona WHERE asignacion_materia_curso.id_documento = registropersona.id_documento and asignacion_materia_curso.id_materia = '$Materia' AND nombre_curso = '$Curso' and nombre_rol = 'Estudiante' order by nombre_usuario ";
    $resultado = $objConexion->query($consulta);
    
    $i = 0;
    $documentos = array();

    if(isset($_POST['enviarA'])){
        if(!empty($_POST['check1'])) {
        foreach($_POST['check1'] as $seleccion) {
        echo "<p>".$seleccion ."</p>";
        }
    while ($estudiantes = $resultado->fetch_object()) {
        $documentos[$i] = $estudiantes->id_documento.$i;
        // print_r($documentos[$i]);
        $i = $i + 1;
            if(!empty($_REQUEST['check1'])) {
            foreach($_POST['check1'] as $seleccion) {
            $consulta1 = "INSERT INTO `asistencia` (id_documento, id_materia, falla, nombre_curso) VALUES('$estudiantes->id_documento', '$Materia', '2023-04-13' ,'$Curso')";
            if($objConexion->query($consulta1)){
            }
            }
            }else{
        echo "NO FUNCIONO HPTAAA:C";
        }
    }
    }
    }















    // Verion 3.0
     // if(!empty($_POST['check1[]'])) {

        //     foreach($_POST['check1[]'] as $seleccion){
        //         echo "<p>".$seleccion ."</p>";
        //     }
        // }

        // Verion 2.0
        // if(isset($_REQUEST['enviarA'])) {
        //     if(!empty($_REQUEST['check1'])){
        //         foreach($_REQUEST['check1'] as $selected){
        //         echo $selected."</br>";
        //     }
        // }
        // }

        // Version 1.0
        // if(isset($_REQUEST['check1'])) {
        //    echo "el estudiante con documento: ". $estudiantes->id_documento. "<br>";
        //   }
        //   else{
        //     echo "no existe". "<br>";
        //   }
    

    
    // while ($ASISTENCIAS = $Asistencias->fetch_object()) {
    //     $documentos[$i] = $estudiantes->id_documento.$i;
    //                 // print_r($documentos[$i]);
    //                 $i = $i + 1;
    // }

    // //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
    // $i =  0;
    
    // while ($estudiantes = $resultado->fetch_object()){
    // $documentos = array();
    // $documentos[$i] = $estudiantes->id_documento.$i;
    // // print_r($documentos[$i]);
    // $i = $i + 1;
    // print_r($documentos);
    // }
    ?>  










    



  
	
    