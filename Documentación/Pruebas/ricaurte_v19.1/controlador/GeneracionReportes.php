<?php
include("conexionBaseDatos.php");
$Conexion = Conectarse();

$Curso = $_REQUEST['Curso'];
$documento = $_REQUEST['Documentos'];
$Materia = $_REQUEST['Materia'];

$from_date = $_GET['from_date'];
$to_date = $_GET['to_date'];



?>
    