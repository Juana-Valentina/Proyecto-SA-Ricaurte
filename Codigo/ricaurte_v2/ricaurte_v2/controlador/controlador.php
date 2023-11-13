<!-- Conexion paginas -->

<?php
// condición isset "si existe" variable accion, esto hace que ingresemos al iniciar sesion

if(isset($_GET['accion'])){
    $accion = $_GET['accion'];
    switch ($accion) {  

        case 'iniciar_sesion': // index hasta iniciar sesion estudiantes
            header("location: ../vista/iniciar_sesion11.php");
            exit();
        break;
        
        case 'iniciar_sesion_e': // index hasta iniciar sesion estudiantes
            header("location: ../vista/gestionar_asistencia_estudiante21.php");
            exit();
        break;

        default:
            echo "Accion no permitida: " . $accion;
            exit();
        break;
    }
}
        

?>

<!-- Fin Conexion paginas -->