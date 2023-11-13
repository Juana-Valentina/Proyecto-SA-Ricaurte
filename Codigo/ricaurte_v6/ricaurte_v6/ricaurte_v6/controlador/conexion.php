<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>

        <?php
        $host= "localhost"; //conexión/ubicación a la base de datos
        $usuario= "root"; // el simbolo $ para crear variables
        $clave= "";
        $bd="proyecto_ricaurte";
        
        $conexion= mysqli_connect($host,$usuario,$clave, $bd); //mysqli_connect -> librrería /
        // if ($conexion){
        //     echo "conectado correctamente"; //echo -> print
        // } else{
        //     echo "No se pudo conectar";
        // }
        
        ?>
    </body>
</html>
