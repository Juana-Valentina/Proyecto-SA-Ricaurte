<?php
    require("../controlador/conexionBaseDatos.php");
    require("../controlador/administrativo.php");
    extract ($_REQUEST);

    $objConexion = Conectarse();


    $Materia = $_REQUEST['Materias'];
    $Curso= $_REQUEST['Curso'];
    $DocumentoP=['DocumentoP'];

    $consulta = "SELECT nombre_usuario, registropersona.id_documento FROM asignacion_materia_curso, registropersona WHERE asignacion_materia_curso.id_documento = registropersona.id_documento and asignacion_materia_curso.id_materia = '$Materia' AND nombre_curso = '$Curso' and nombre_rol = 'Estudiante' order by nombre_usuario ";
    $resultado = $objConexion->query($consulta);
    
    
    $i = 0;
    $documentos = array();

    if(isset($_POST['enviarA'])){
        if(!empty($_POST['check1'])) {
        foreach($_POST['check1'] as $seleccion) {
        }
    while ($estudiantes = $resultado->fetch_object()) {
        $documentos[$i] = $estudiantes->id_documento.$i;
        // print_r($documentos[$i]);
        $i = $i + 1;
            if(!empty($_REQUEST['check1'])) {
            foreach($_POST['check1'] as $seleccion) {
            $consulta1 = "INSERT INTO `asistencia` (id_documento, id_materia, falla, nombre_curso) VALUES('$estudiantes->id_documento', '$Materia', '2023-04-13' ,'$Curso')";
            if($objConexion->query($consulta1)){
                header("location: ../vista/asistencia23.php?Cursos=$Curso &Materias=$Materia ");
            }
            }
            
        }else{
        echo "NO FUNCIONO HPTAAA:C";
        }
    }
    
    }
    }