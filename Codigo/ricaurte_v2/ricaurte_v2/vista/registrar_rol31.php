<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Rol</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="vista/CSS/registrar_rol31.css">
</head>
<body>
    <div class="container">
        <h2>Nombre</h2>
        <form id="rolForm">
            <div class="form-group">
                <label for="rolSelect">Selecciona tu rol:</label>
                <select class="form-control" id="rolSelect">
                    <option value="profesor">Profesor</option>
                    <option value="rectoria">Rectoría</option>
                    <option value="secretaria">Secretaria</option>
                </select>
            </div>
            <button type="button" class="btn btn-danger" id="cancelarBtn">Cancelar</button>
            <button type="button" class="btn btn-primary" href="controlador/controlador.php?accion=subir_archivo">Enviar</button>
        </form>
    </div>

    <!-- Incluye jQuery y los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Incluye el archivo JavaScript personalizado -->
    <script src="vista/JAVASCRIPT/registrar_rol31.js"></script>
</body>
</html>
