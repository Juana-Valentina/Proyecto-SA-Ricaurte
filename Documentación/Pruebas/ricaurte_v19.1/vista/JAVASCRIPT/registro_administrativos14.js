// Función para validar el formulario y mostrar un mensaje
document.getElementById("registrarBtn").addEventListener("click", function() {
  var nombreCompleto = document.getElementById("nombreCompleto").value;
  var documento = document.getElementById("documento").value;
  var correoInstitucional = document.getElementById("correoInstitucional").value;
  var numeroContacto = document.getElementById("numeroContacto").value;
  var contrasena = document.getElementById("contrasena").value;

  // Validación simple (puedes agregar validaciones más robustas)
  if (nombreCompleto && documento && correoInstitucional && numeroContacto && contrasena) {
      // Aquí podrías enviar los datos del formulario a un servidor para el registro
      document.getElementById("mensajeRegistro").innerHTML = '<div class="alert alert-success">Registro exitoso.</div>';
  } else {
      document.getElementById("mensajeRegistro").innerHTML = '<div class="alert alert-danger">Por favor, completa todos los campos.</div>';
  }
});
