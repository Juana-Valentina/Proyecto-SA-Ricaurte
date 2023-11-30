// Agrega aquí el código de validación de campos
document.getElementById('loginForm').addEventListener('submit', function (event) {
  event.preventDefault();
  const correoInstitucional = document.getElementById('correoInstitucional').value;
  const contrasena = document.getElementById('contrasena').value;

  // Agrega aquí la lógica de validación de campos
  if (!correoInstitucional || !contrasena) {
    alert('Por favor, complete todos los campos.');
    return;
  }

  // Agrega aquí la lógica de inicio de sesión
  // Por ejemplo, puedes enviar los datos al servidor para su validación
});
