<!-- Conexion paginas -->

<?php
// condición isset "si existe" variable accion, esto hace que ingresemos al iniciar sesion

        if(isset($_GET['accion'])){
            $accion = $_GET['accion'];

            while($accion !== "salir"){


                switch ($accion) {

                    //estudiante
                    case 'iniciar_sesion':
                        header("location: ../vista/iniciar_sesion11.php");
                    continue;
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

                    // administrativo profesor

                    // case 'iniciar_sesion_a':
                    //     header("location: ../vista/iniciar_sesion_administradores12.php"); 
                    //     break;

                    // case 'iniciar_sesion_ad':
                    //     header("location: ../vista/gestionar_asistencia_profesor22.php"); 
                    //     break;
                    
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
                }
        
                    echo "<br>Final...";

            }
        }
        


?>

<!-- Fin Conexion paginas -->