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
        <form id="registroForm" name="FormAd" method="post" action="../controlador/RegistroAd.php">;
            <div class="form-group">
                <label for="nombreCompleto">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombreCompleto" name="NombreAd" required >
            </div>
            <div class="form-group">
                <label for="documento">Documento:</label>
                <input type="text" class="form-control" id="documento" name="DocumentoAd" required>
            </div>
            <div class="form-group">
                <label for="correoInstitucional">Correo Institucional:</label>
                <input type="email" class="form-control" id="correoInstitucional" name="Correo_institucionalAd"required>
            </div>
            <div class="form-group">
                <label for="numeroContacto">Número de Contacto:</label>
                <input type="tel" class="form-control" id="numeroContacto" name="NumeroAd" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" name="ContrasenaAd" required>
            </div>
            <div class="form-group">
                <label for="rol">Seleccione su rol:</label>
                <select name="rol" id="rol">
                    <option value="Seleccione">Seleccione</option>
                    <option value="Profesor">Profesor</option>
                    <option value="Coordinacion">Coordinacion</option>
                </select>
            </div>
            <div class="text-center"> <!-- Centro el botón -->
                <a href="../controlador/controlador.php?accion=regresar_inicio_e" class="btn btn-danger" id="cancelarBtn">Regresar</a>

                <input type="submit" name="RegistrarseAd" class="btn btn-primary" id="Registrarse" href="../controlador/controlador.php?accion=confirmar_correo">

            </div>
        </form>
        <div id="mensajeRegistro" class="mt-3"></div>
    </div>
    <?php 
        include("../controlador/controlador.php");
    ?>
    <!-- Enlace a Bootstrap JS y jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript personalizado -->
    <script src="vista/JAVASCRIPT/registro_administrativos14.js"></script>
</body>
</html>
