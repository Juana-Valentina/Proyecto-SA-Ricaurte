<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>

    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Enlace a la hoja de estilos personalizada -->
    <link rel="stylesheet" href="CSS/registro_estudiantes13.css">
</head>

<body>
    <!-- Contenedor principal -->
    <div class="container mt-5">
        <!-- Título de la página -->
        <h1>Registro de Estudiantes</h1>

        <!-- Formulario de registro -->
        <form id="registroAd" name="RegistroEs" method="post" action="../controlador/registroEs.php">
            <!-- Campo de Nombre Completo -->
            <div class="form-group">
                <label for="Nombre">Nombre Completo</label>
                <input type="text" class="form-control" id="nombreCompleto" name="Nombre" required>
                <span class="error-message" id="nombreCompleto-error"></span>
            </div>

            <!-- Campo de Documento -->
            <div class="form-group">
                <label for="Documento">Documento</label>
                <input type="text" class="form-control" id="documento" name="Documento" required>
                <span class="error-message" id="documento-error"></span>
            </div>

            <!-- Campo de Correo Institucional -->
            <div class="form-group">
                <label for="Correo_institucional">Correo Institucional</label>
                <input type="email" class="form-control" id="correoInstitucional" name="Correo_institucional" required>
                <span class="error-message" id="correoInstitucional-error"></span>
            </div>

            <!-- Campo de Número de Contacto -->
            <div class="form-group">
                <label for="Telefono">Número de Contacto</label>
                <input type="tel" class="form-control" id="numeroContacto" name="Telefono" required>
                <span class="error-message" id="numeroContacto-error"></span>
            </div>

            <!-- Campo de Contraseña -->
            <div class="form-group">
                <label for="Contraseña">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="Contraseña" required>
                <span class="error-message" id="contrasena-error"></span>
            </div>

            <!-- Botones de regresar y registrarse -->
            <div class="text-center"> <!-- Centro el botón -->
                <!-- Enlace para regresar al inicio -->
                <a href="../controlador/controlador.php?accion=regresar_inicio_e" class="btn btn-custom" id="cancelarBtn">Regresar</a>

                <!-- Botón de submit para enviar el formulario -->
                <input type="submit" name="Registrarse" class="btn btn-custom" id="Registrarse">
            </div>
        </form>

        <!-- Mensaje de registro exitoso (inicialmente oculto) -->
        <div id="registroExitoso" class="mt-3 alert alert-success" style="display:none;">Registro exitoso.</div>
    </div>

    <!-- Script de JavaScript para validar el formulario -->
    <script src="JAVASCRIPT/registro_estudiantes13.js"></script>
</body>
</html>
