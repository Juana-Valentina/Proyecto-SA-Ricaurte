<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación de Contraseña</title>
    <!-- Agrega los enlaces a las bibliotecas Bootstrap y estilos personalizados -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/recuperar_password18.css">
</head>
<body>
    <div class="container">
        <h2>Recuperación de Contraseña</h2>
        <div id="verificationCodeDiv">
            <h4>Ingrese el Código de Verificación</h4>
            <form id="verificationForm">
                <div class="mb-3">
                    <label for="verificationCode">Código de Verificación:</label>
                    <input type="text" class="form-control" id="verificationCode" placeholder="Ingrese el código recibido" required>
                </div>
                <a class="btn btn-primary" href="../controlador/controlador.php?accion=crear_contrasena">Verificar Código</a>
            </form>
        </div>
        <div id="passwordChangeDiv" style="display: none;">
            <h4>Cambiar Contraseña</h4>
            <form id="passwordChangeForm">
                <div class="mb-3">
                    <label for="newPassword">Nueva Contraseña:</label>
                    <input type="password" class="form-control" id="newPassword" placeholder="Ingrese su nueva contraseña" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword">Confirmar Contraseña:</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme su nueva contraseña" required>
                </div>
                <button type="button" class="btn btn-primary" id="changePassword">Cambiar Contraseña</button>
            </form>
        </div>
        <div id="successMessage" style="display: none;">
            <div class="alert alert-success mt-3">
                Contraseña cambiada con éxito. Puede <a href="#">iniciar sesión</a> con su nueva contraseña.
            </div>
        </div>
    </div>

    <!-- Agrega los enlaces a las bibliotecas Bootstrap y scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vista/JAVASCRIPT/j recuperar_password1.8.js"></script>
</body>
</html>
