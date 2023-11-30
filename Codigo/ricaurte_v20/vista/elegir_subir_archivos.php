<?php 
    // Se requieren los archivos de conexión y la lógica del administrativo
    require "../controlador/conexionBaseDatos.php";
    require "../controlador/administrativo.php";

    // Extrae las variables del array $_REQUEST
    extract ($_REQUEST);

    // Conectarse a la base de datos
    $Conexion = Conectarse();
    
    // Obtener el documento de la solicitud
    $documento = $_REQUEST['Identificacion'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="CSS/elegir_subir_archivos.css">
    <title>Subir Archivos</title>

    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar-dark">
        <a class="navbar-brand" href="../controlador/controlador.php?accion=iniciar_sesion">Inicio</a>
        <a class="navbar-brand" href="perfil.php?Identificacion=<?php echo $documento ?>">Perfil</a>
        <a class="navbar-brand" href="../controlador/controlador.php?accion=salir">Salir</a>
    </nav>
<br><br>
    <!-- Formulario para subir archivos -->
    <form>
        <div class="container" style="width: 550px; text-align: center">
            <h2>Subir archivos</h2>
            <br><br>
            <div class="profile-header">
                <fieldset enabled>
                    <!-- Sección para subir archivos relacionados con cursos -->
                    <div class="mb-3">
                        <label for="disabledTextInput" class="entrada">Cursos</label>
                        <div class="input-group mb-3">
                            <a class="btn btn-custom" href="../controlador/controlador.php?accion=anadir_curso&Documentos=<?php echo $documento?>" style="background-color: #FF007A; color:aliceblue; margin-left: 231px">Subir</a>
                        </div>
                    </div>

                    <!-- Sección para subir archivos relacionados con materias -->
                    <div class="mb-3">
                        <label for="disabledTextInput" class="entrada">Materias</label>
                        <div class="input-group mb-3">
                            <a class="btn btn-custom" href="../controlador/controlador.php?accion=anadir_materia&Documentos=<?php echo $documento?>" style="background-color: #FF007A; color:aliceblue;margin-left: 231px">Subir</a>
                        </div> 
                    </div> 

                    <!-- Sección para subir archivos relacionados con horarios de profesores -->
                    <div class="mb-3">
                        <label for="disabledTextInput" class="entrada">Horarios Profesores</label>
                        <div class="input-group mb-3">
                            <a class="btn btn-custom" href="../controlador/controlador.php?accion=horario_e&Documentos=<?php echo $documento?>" style="background-color: #FF007A; color:aliceblue;margin-left: 230px">Subir</a>
                        </div>
                    </div>

                    <!-- Sección para agregar estudiantes -->
                    <div class="mb-3">
                        <label for="disabledTextInput" class="entrada">Agregar Estudiantes</label>
                        <div class="input-group mb-3">
                            <a class="btn btn-custom" href="../controlador/controlador.php?accion=horario_Estudiantes&Documentos=<?php echo $documento?>" style="background-color: #FF007A; color:aliceblue;margin-left: 230px">Subir</a>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </form>

    <!-- Script de JavaScript personalizado -->
    <script src="vista/JAVASCRIPT/j perfil.js"></script>

    <!-- Enlaces a las bibliotecas de Bootstrap y Popper.js, y el script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
