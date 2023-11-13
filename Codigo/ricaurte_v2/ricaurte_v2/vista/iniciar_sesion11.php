<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilo personalizado -->
    <link rel="stylesheet" href="CSS/iniciar_sesion11.css">
</head>
<body>
    <div class="container">
    <div class="row justify-content-center mt-5">
    <div class="col-md-6">
    <div class="card">
    <div class="card-header bg-custom">
        <h3 class="text-center">Iniciar Sesión</h3>
    </div>
    <div class="card-body content">
        <form id="login-form">
    <div class="form-group">
        <label for="email"><i class="fas fa-user"></i> Correo Electrónico (Usuario)</label>
        <input type="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password"><i class="fas fa-lock"></i> Contraseña</label>
        <input type="password" id="password" class="form-control" required>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-custom" href="../controlador/controlador.php?accion=iniciar_sesion_e">Iniciar Sesión</button>
    </div>
</form>
    <div class="text-center">
        <a href="controlador/controlador.php?accion=recuperar_contrasena" class="black-link">Recuperar Contraseña</a> | <a href="controlador/controlador.php?accion=registro_estudiante" class="black-link">Registrarse</a>
    </div>
</div>
</div>
</div>
</div>
</div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="vista/JAVASCRIPT/iniciar_sesion11.js"></script>
</body>
</html>   