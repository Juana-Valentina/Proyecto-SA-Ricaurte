<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Horarios de Estudiantes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <!--  archivo CSS  -->
    <link rel="stylesheet" href="CSS/horario_estudiantes36.css">
</head>
<body class="background">
    <div class="container mt-5 content">
        <h1>Horario Estudiantes</h1>
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
<!-- Agregar Materia -->
    <div class="card mt-4">
    <div class="card-header">
        Agregar Materia 
    </div>
    <div class="card-body">
        <form id="formAgregarMateria">
    <div class="form-group">
        <label for="nombreMateria">Nombre de la Materia</label>
        <input type="text" class="form-control" id="nombreMateria" placeholder="Nombre de la Materia">
    </div>
        <button type="submit" class="btn btn-custom">Agregar Materia</button>
    </form>
</div>
</div>
<!-- Lista de Materias -->
    <div class="mt-4">
        <h2>Materias</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody id="listaMaterias">
<!-- Aquí se cargarán las materias -->
                <tr>
                    <td>Matemáticas</td>
                    <td><button class="btn btn-primary">Editar</button></td>
                    <td><button class="btn btn-danger">Eliminar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-center mt-4">
    <a href="elegir_subir_archivos.php" class="btn btn-primary">Guardar</a>
    </div>
</div>
<!-- Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Tu archivo JavaScript personalizado -->
    <script src="JAVASCRIPT/horario_estudiantes36.js"></script>
</body>
</html>