<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegir cursos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <!--  archivo CSS  -->
    <link rel="stylesheet" href="vista/CSS/anadir_cursos33.css">
</head>
<body class="background">
    <div class="container mt-5 content">
        <h1>Agregar Curso </h1>
        <hr>
<!-- Agregar Curso -->
    <div class="card">
    <div class="card-header">
        Agregar Curso 
    </div>
    <div class="card-body">
        <form id="formAgregarCurso">
    <div class="form-group">
        <label for="nombreCurso">Nombre del Curso</label>
        <input type="text" class="form-control" id="nombreCurso" placeholder="Nombre del Curso">
    </div>
    <button type="submit" class="btn btn-custom">Agregar Curso</button>
</form>
</div>
</div>
<!-- Lista de Cursos -->
    <div class="mt-4">
        <h2>Cursos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
        <tbody id="listaCursos">
<!-- Aquí se cargarán los cursos -->
                <tr>
                    <td>601</td>
                    <td><button class="btn btn-primary">Editar</button></td>
                    <td><button class="btn btn-danger">Eliminar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
<!-- Tu archivo JavaScript personalizado -->
    <script src="vista/JAVASCRIPT/anadir_cursos33.js"></script>
</body>
</html>