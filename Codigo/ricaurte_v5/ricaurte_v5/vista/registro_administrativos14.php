<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Administrativos</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="CSS/registro_administrativos14.css">
</head>
<body>
    <div class="container">
        <h2>Registro de Administrativos</h2>
        <form id="registroForm">
            <div class="form-group">
                <label for="nombreCompleto">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombreCompleto" required>
            </div>
            <div class="form-group">
                <label for="documento">Documento:</label>
                <input type="text" class="form-control" id="documento" required>
            </div>
            <div class="form-group">
                <label for="correoInstitucional">Correo Institucional:</label>
                <input type="email" class="form-control" id="correoInstitucional" required>
            </div>
            <div class="form-group">
                <label for="numeroContacto">Número de Contacto:</label>
                <input type="tel" class="form-control" id="numeroContacto" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" required>
            </div>
            <div class="text-center">
             <a href="../controlador/controlador.php?accion=regresar_inicio_a" class="btn btn-danger" id="cancelarBtn">Regresar</a>

              <a class="btn btn-primary" href="../controlador/controlador.php?accion=confirmar_correo">Registrar</a>
          </div>
        </form>
        <div id="mensajeRegistro" class="mt-3"></div>
    </div>

    <!-- Enlace a Bootstrap JS y jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript personalizado -->
    <script src="vista/JAVASCRIPT/registro_administrativos14.js"></script>
</body>
</html>
