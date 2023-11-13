<!-- Conexion paginas -->

<?php
if(isset($_GET['accion'])){
    $accion = $_GET['accion'];
    switch ($accion) {
        case 'Iniciar_sesion':
            header("location: ../vista/iniciar_sesion11.php");
            break;
        
        default:
            echo "Accion no permitida: " . $accion;
            break;
    }

    echo "<br>Final...";
}

    

?>

<!-- Fin Conexion paginas -->
