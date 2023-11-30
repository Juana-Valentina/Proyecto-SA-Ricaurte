<?php
require "../controlador/conexionBaseDatos.php";
extract ($_REQUEST);
$Curso = $_REQUEST['Curso'];
$Materia = $_REQUEST['Materias'];
$documento = $_REQUEST['Documentos'];

$objConexion = Conectarse();

$sql="delete from asistencia where id_documento = '$_REQUEST[Identificacion]' and falla = '$_REQUEST[Fecha]' ";

$resultado = $objConexion->query($sql);

if ($resultado)
header("location: ../vista/asistencia23.php?Cursos=$Curso &Materias=$Materia &Documentos=$documento ");
else
    echo "MAL";
?>