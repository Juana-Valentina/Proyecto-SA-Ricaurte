<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Administrativos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/iniciar_sesion_administradores12.css">
</head>

<body>
    <div class="container">
    <div class="row justify-content-center mt-5">
    <div class="col-md-6">
    <div class="card">
    <div class="card-header bg-custom">
        <h3 class="text-center">Iniciar Sesión - Administrativos</h3>
    </div>
    <div class="card-body content">
        <form id="login-form" name="FormularioAd" method="post" action="../controlador/ValidacionInicioAd.php">
    <div class="form-group">
        <label for="email"><i class="fas fa-user"></i> Correo Electrónico (Usuario)</label>
        <input type="email" id="email" class="form-control" name="LoginAd" required>
    </div>
    <div class="form-group">
        <label for="password"><i class="fas fa-lock"></i> Contraseña</label>
        <input type="password" id="password" class="form-control" name="contrasenaAd" required>
    </div>
    <div class="form-group text-center">
    <input type="submit" name="enviar" class="btn btn-custom" id="enviar" name="Enviar">
    </div>
</form>
    <div class="text-center">
         <a href="../vista/registro_administrativos14.php" class="black-link">Registrarse</a>
        
    </div>

</div>
</div>
</div>
</div>
</div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="vista/JAVASCRIPT/j Iniciar_sesion_administradores1.2.js"></script>
</body>
</html>
