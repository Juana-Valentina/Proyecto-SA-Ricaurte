<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar De Asistencia</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/gestionar_asistencia_profesor22.css">
</head>
<body>
    <div class="container">
        <h2>Gestionar Asistencia</h2>
        <form id="rolForm">
            <div class="form-group">
                <label for="rolSelect">Seleccionar Curso</label>
                <select class="form-control" id="rolSelect">
                    <option value="Seleccione curso">Seleccione curso</option>
                    <option value="601">601</option>
                    <option value="702">702</option>
                    <option value="703">703</option>
                    <option value="803">803</option>
                    <option value="901">901</option>

                </select>
                <label for="rolSelect">Seleccionar Materia</label>
                <select class="form-control" id="rolSelect">
                    <option value="Seleccione Materia">Seleccione materia</option>
                    <option value="Español">Español</option>
                    <option value="Matematicas">Matemáticas</option>
                    <option value="Ingles">Inglés</option>
                    <option value="Fisica">Física</option>
                    <option value="Quimica">Química</option>

                </select>
            </div>
            <a href="asistencia23.php" class="btn btn-light" style="background-color: #FF007A; color:aliceblue">Consultar</a>
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
