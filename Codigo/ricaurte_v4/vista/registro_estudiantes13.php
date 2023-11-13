<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/registro_estudiantes13.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Registro de Estudiantes</h1>
        <form id="registration-form">
            <div class="form-group">
                <label for="nombreCompleto">Nombre Completo</label>
                <input type="text" class="form-control" id="nombreCompleto" required>
                <span class="error-message" id="nombreCompleto-error"></span>
            </div>
            <div class="form-group">
                <label for="documento">Documento</label>
                <input type="text" class="form-control" id="documento" required>
                <span class="error-message" id="documento-error"></span>
            </div>
            <div class="form-group">
                <label for="correoInstitucional">Correo Institucional</label>
                <input type="email" class="form-control" id="correoInstitucional" required>
                <span class="error-message" id="correoInstitucional-error"></span>
            </div>
            <div class="form-group">
                <label for="numeroContacto">Número de Contacto</label>
                <input type="tel" class="form-control" id="numeroContacto" required>
                <span class="error-message" id="numeroContacto-error"></span>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" required>
                <span class="error-message" id="contrasena-error"></span>
            </div>
            <div class="text-center"> <!-- Centro el botón -->
                <a href="../controlador/controlador.php?accion=regresar_inicio_e" class="btn btn-danger" id="cancelarBtn">Regresar</a>

                <a class="btn btn-primary" href="../controlador/controlador.php?accion=confirmar_correo">Registrar</a>

            </div>
        </form>
        <div id="registroExitoso" class="mt-3 alert alert-success" style="display:none;">Registro exitoso.</div>
    </div>
    <script src="vista/JAVASCRIPT/registro_estudiantes13.js"></script>
</body>
</html>
