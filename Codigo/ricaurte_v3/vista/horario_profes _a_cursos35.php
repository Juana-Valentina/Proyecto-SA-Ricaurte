<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Horarios de Profesores</title>
<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
<!-- Archivo CSS  -->
  <link rel="stylesheet" href="CSS/horario_profes_a_cursos35.css">
</head>
<body class="background">
  <div class="container mt-5 content">
    <h1>Horarios de Profesores</h1>
    <hr>
<!-- Agregar Profesor -->
  <div class="card">
  <div class="card-header">
    Agregar Profesor
  </div>
  <div class="card-body">
    <form id="formAgregarProfesor">
  <div class="form-group">
    <label for="nombreProfesor">Nombre del Profesor</label>
    <input type="text" class="form-control" id="nombreProfesor" placeholder="Nombre del Profesor">
  </div>
  <div class="form-group">
    <label for="documentoIdentidad">Documento de Identidad</label>
    <input type="text" class="form-control" id="documentoIdentidad" placeholder="Documento de Identidad">
  </div>
  <div class="form-group">
    <label for="cursoProfesor">Curso del Profesor</label>
    <input type="text" class="form-control" id="cursoProfesor" placeholder="Curso del Profesor">
  </div>
  <button type="submit" class="btn btn-custom">Agregar Profesor</button>
</form>
</div>
</div>
<!-- Lista de Profesores -->
  <div class="mt-4">
    <h2>Profesores</h2>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Documento de Identidad</th>
          <th>Curso</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody id="listaProfesores">
<!-- Aquí se cargarán los profesores -->
</tbody>
</table>
</div>
</div>
<!-- Bootstrap JS y jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
  <!--  JavaScript  -->
  <script src=" JAVASCRIPT/horario_profes_a_cursos35.js"></script>
</body>
</html>