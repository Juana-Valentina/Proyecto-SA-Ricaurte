<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="CSS/recuperar_password_correo17.css">
    <!-- Agrega el enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Recuperar Contraseña</h1>
        <form id="passwordRecoveryForm">
            <div class="form-group">
                <label for="email">Correo Electrónico Institucional:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <a href="recuperar_password18.php" class="btn btn-custom btn-block" id="btnGuardar">Continuar</a>
        </form>
        <div id="message" class="mt-3 text-center"></div>
    </div>

    <!-- Agrega los scripts de Bootstrap y tu script personalizado -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="vista/JAVASCRIPT/recuperar_password_correo1.7.js"></script>
</body>
</html>
