<!-- INGRESO DATOS REGISTRO ESTUDIANTES -->
<?php

    
    include("conexionBaseDatos.php");

    

?>
<!-- FIN INGRESO DATOS REGISTRO ESTUDIANTES -->

<!-- INGRESO DATOS REGISTGRO ADMINISTRATIVOS -->

<?php

if (isset($_POST['RegistrarseAd'])){

if (strlen($_POST['DocumentoAd']) >= 1 &&
strlen($_POST['CorreoAd']) >= 1 &&
strlen($_POST['NombreAd']) >= 1 &&
strlen($_POST['NumeroAd']) >= 1 ) {

    $Documento = trim($_POST['DocumentoAd']);
    $Correo_institucional = trim($_POST['CorreoAd']);
    $Nombre = trim($_POST['NombreAd']);
    $Telefono = trim($_POST['NumeroAd']);
    $Consulta = "INSERT INTO `persona/registro`(Documento, Correo_institucional, Nombre, Telefono) VALUES ('$Documento','$Correo_institucional','$Nombre','$Telefono')";
    $Resultado = mysqli_query($conexion, $Consulta);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       

        header("location: ../vista/confirmar_correo_institucional.php"); 

    }
//     if ($Resultado) {
//         ?>
         <!--<h3 class="ok">¡Te has registrado correctamente!</h3>-->
         <?php    
//     } else {
//         ?>
        <!--<h3 class="mal">¡Ups a ocurrido un error!</h3>-->
        <?php    
//     }
// } else {
//     ?>
       <!--<h3 class="mal">¡Porfavor complete los campos!</h3>-->
       <?php    
}
}

?>

<!-- FIN INGRESO DATOS REGISTGRO ADMINISTRATIVOS -->

<!-- CONEXION PAGINAS -->

<?php
// condición isset "si existe" variable accion, esto hace que ingresemos al iniciar sesion

        if(isset($_GET['accion'])){
            $accion = $_GET['accion'];

            while($accion !== ""){


                switch ($accion) {

                    //estudiante
                    case 'perfil':
                        header("location: ../vista/perfil.php");
                        break;
                    case 'iniciar_sesion':
                        header("location: ../vista/iniciar_sesion11.php");
                    break;
                    case 'iniciar_sesion_e':
                        header("location: ../vista/gestionar_asistencia_estudiante21.php");
                        break;


                    case 'asistencia_e':
                        header("location: ../vista/asistencia_estudiantes24.php"); 
                        break;
                        case 'gestionar_asistencia_e':
                            header("location: ../vista/gestionar_asistencia_estudiante21.php"); 
                        break;

                    case 'regresar_inicio_e':
                        header("location: ../vista/iniciar_sesion11.php"); 
                        break;
                        
                    case 'confirmar_codigohtml':
                        header("location: ../vista/confirmar_codigohtml.php"); 
                        break;

                    // administrativo profesor

                    // case 'iniciar_sesion_a':
                    //     header("location: ../vista/iniciar_sesion_administradores12.php"); 
                    //     break;

                    //  case 'iniciar_sesion_ad':
                    //     header("location: ../vista/gestionar_asistencia_profesor22.php"); 
                    //      break;
                    
                    // case 'asistencia':
                    //     header("location: ../vista/asistencia23.php"); 
                    //     break;

                    //Administrativo secretaria

                    case 'iniciar_sesion_a':
                        header("location: ../vista/iniciar_sesion_administradores12.php"); 
                        break;

                    case 'iniciar_sesion_ad':
                        header("location: ../vista/elegir_subir_archivos.php"); 
                        break;
                    
                    case 'elegir_rol':
                        header("location: ../vista/registrar_rol31.php"); 
                        break;

                    case 'anadir_curso':
                        header("location: ../vista/anadir_cursos33.php"); 
                        break;

                    case 'anadir_materia':
                        header("location: ../vista/subir_materias_a_cursos34.php"); 
                        break;

                    case 'horario_p':
                        header("location: ../vista/horario_profes _a_cursos35.php"); 
                        break;

                    case 'horario_e':
                        header("location: ../vista/horario_estudiantes36.php");  
                        break;

                    case 'regresar_elegir':
                        header("location: ../vista/elegir_subir_archivos.php"); 
                        break;

                    case 'regresar_inicio_a': 
                        header("location: ../vista/iniciar_sesion_administradores12.php"); 
                        break;
                    
                        //recuperar contraeña
                    case 'recuperar_contrasena_i':
                        header("location: ../vista/recuperar_password_correo17.php"); 
                        break;
                    
                    case 'recuperar_contrasena':
                        header("location: ../vista/recuperar_password18.php"); 
                        break;
                    case 'crear_contrasena':
                        header("location: ../vista/crear_contraseña.php"); 
                        break;
                        
                    case 'index':
                        header("location: ../index.php"); 
                        break;
                        
                        //registrar 

                        
                    case 'registro_estudiante': 
                        header("location: ../vista/registro_estudiantes13.php"); 
                        break;

                    case 'confirmar_correo': 
                        header("location: ../vista/confirmar_correo_institucional.php"); 
                        break;

                    case 'registro': 
                        header("location: ../vista/registro_administrativos14.php"); 
                        break;
                    
                    default;
                        header("location: ../index.php"); 
                      break;
                    case 'salir':
                        header("location: ../index.php");
                        break;
                }
        
                    echo "<br>Final...";

            }
        }
        


?>

<!-- FIN CONEXION PAGINAS -->