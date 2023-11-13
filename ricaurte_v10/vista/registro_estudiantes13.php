<!DOCTYPE html>
<h lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/registro_estudiantes13.css">
</head>
<bo>
    <div class="container mt-5">
        <h1>Registro de Estudiantes</h1>
        <form id="registroAd" name="RegistroEs" method="post" action="../controlador/registroEs.php">
            <div class="form-group">
                <label for="Nombre">Nombre Completo</label>
                <input type="text" class="form-control" id="nombreCompleto" name="Nombre" required>
                <span class="error-message" id="nombreCompleto-error"></span>
            </div>
            <div class="form-group">
                <label for="Documento">Documento</label>
                <input type="text" class="form-control" id="documento" name="Documento" required>
                <span class="error-message" id="documento-error"></span>
            </div>
            <div class="form-group">
                <label for="Correo_institucional">Correo Institucional</label>
                <input type="email" class="form-control" id="correoInstitucional" name="Correo_institucional" required>
                <span class="error-message" id="correoInstitucional-error"></span>
            </div>
            <div class="form-group">
                <label for="Telefono">Número de Contacto</label>
                <input type="tel" class="form-control" id="numeroContacto" name="Telefono" required>
                <span class="error-message" id="numeroContacto-error"></span>
            </div>
            <div class="form-group">
                <label for="Contraseña">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="Contraseña" required>
                <span class="error-message" id="contrasena-error"></span>
            </div>
            <div class="text-center"> <!-- Centro el botón -->
                <a href="../controlador/controlador.php?accion=regresar_inicio_e" class="btn btn-danger" id="cancelarBtn">Regresar</a>

                <input type="submit" name="Registrarse" class="btn btn-primary" id="Registrarse">
            </div>
        </form>
        <div id="registroExitoso" class="mt-3 alert alert-success" style="display:none;">Registro exitoso.</div>
    </div>
    <script src="vista/JAVASCRIPT/registro_estudiantes13.js"></script>