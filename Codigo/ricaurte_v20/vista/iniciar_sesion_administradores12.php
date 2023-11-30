<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Administrativos</title>

    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Enlace a la hoja de estilos personalizada -->
    <link rel="stylesheet" href="CSS/iniciar_sesion_administradores12.css">
</head>

<body>
    <!-- Contenedor principal -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <!-- Encabezado de la tarjeta con el título -->
                    <div class="card-header bg-custom">
                        <h3 class="text-center">Iniciar Sesión - Administrativos</h3>
                    </div>

                    <!-- Cuerpo de la tarjeta con el formulario de inicio de sesión -->
                    <div class="card-body content">
                        <form id="login-form" name="FormularioAd" method="post" action="../controlador/ValidacionInicioAd.php">
                            <!-- Campo de Correo Electrónico (Usuario) -->
                            <div class="form-group">
                                <label for="email"><i class="fas fa-user"></i> Correo Electrónico (Usuario)</label>
                                <input type="email" id="email" class="form-control" name="LoginAd" required>
                            </div>

                            <!-- Campo de Contraseña -->
                            <div class="form-group">
                                <label for="password"><i class="fas fa-lock"></i> Contraseña</label>
                                <input type="password" id="password" class="form-control" name="contrasenaAd" required>
                            </div>

                            <!-- Botones de Regresar y Enviar -->
                            <div class="form-group text-center">
                                <!-- Enlace para regresar al inicio -->
                                <a href="../index.php" class="btn btn-custom" id="cancelarBtn">Regresar</a>

                                <!-- Botón de submit para enviar el formulario -->
                                <input type="submit" name="enviar" class="btn btn-custom" id="enviar" name="Enviar">
                            </div>
                        </form>

                        <!-- Enlace para registrarse -->
                        <div class="text-center">
                            <a href="../vista/registro_administrativos14.php" class="btn btn-custom">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Script de JavaScript para el formulario de inicio de sesión -->
    <script src="JAVASCRIPT/iniciar_sesion_administradores12.js"></script>
</body>
</html>
