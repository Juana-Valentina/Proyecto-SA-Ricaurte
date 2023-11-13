<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear contraseña 1.6</title>
    <link rel="stylesheet" href="CSS/contrasena16.css">
    <!-- Agrega el enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="width: 700px;">
        <h1 class="text-center">Crear contraseña</h1>
        <form id="passwordRecoveryForm">
            <div class="form-group">
                <label for="email">Ingrese una nueva contraseña:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese contraseña" required>
            </div>
            <a href="../controlador/controlador.php?accion=index" class="btn btn-custom btn-block" style="background-color: #FF007A; color:aliceblue" id="continueBtn">Continuar</a>
        </form>
        <div id="message" class="mt-3 text-center"></div>
    </div>
    <!-- Agrega los scripts de Bootstrap y tu script personalizado -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="vista/JAVASCRIPT/j recuperar_password_correo1.7.js"></script>
</body>
</html>