<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="vista/CSS/perfil.css">
  <title>Perfil de Usuario</title>
</head>
<body>
  <div class="container mt-5">
  <div class="row">
  <div class="col-md-4">
  <div class="profile-header text-center">
    <img id="profileImage" src="Logo.png" alt="Foto de perfil" class="img-fluid">
  </div>
</div>
  <div class="col-md-8">
  <div class="profile-details">
    <h1 class="text-center">Perfil de Estudiante</h1>
    <form>
  <div class="form-group">
    <label for="fullname">Nombre completo:</label>
    <input type="text" id="fullname" class="form-control" value="John Doe" disabled>
    <button type="button" class="btn btn-primary" id="editFullName">Editar</button>
  </div>
  <div class="form-group">
    <label for="phone">Número de Teléfono:</label>
    <input type="text" id="phone" class="form-control" value="123-456-7890" disabled>
    <button type="button" class="btn btn-primary" id="editPhone">Editar</button>
  </div>
  <p>Identificación: <span id="identification">1085672033</span></p>
  <p>Correo institucional: ejemplo@soy.sena.edu.co</p>
  <button type="submit" class="btn btn-primary" id="saveButton" disabled>Guardar Cambios</button>
</form>
</div>
</div>
</div>
</div>
  <script src="vista/JAVASCRIPT/perfil.js"></script>
</body>
</html>
