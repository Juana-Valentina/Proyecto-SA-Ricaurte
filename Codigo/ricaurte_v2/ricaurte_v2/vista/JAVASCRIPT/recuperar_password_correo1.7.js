document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("passwordRecoveryForm");
  const emailInput = document.getElementById("email");
  const continueBtn = document.getElementById("continueBtn");
  const messageDiv = document.getElementById("message");

  continueBtn.addEventListener("click", function(event) {
      event.preventDefault();

      const email = emailInput.value;

      // Verificar si el campo de correo electrónico está vacío
      if (email.trim() === "") {
          messageDiv.innerHTML = "Por favor, completa todos los campos.";
      } else if (!isValidEmail(email)) {
          // Verificar si el formato del correo electrónico es válido
          messageDiv.innerHTML = "Por favor, ingresa un correo electrónico válido.";
      } else {
          // Si los campos están llenos y el formato es válido, simular la solicitud de recuperación de contraseña
          simulatePasswordRecovery(email);
      }
  });

  function isValidEmail(email) {
      // Expresión regular para validar el formato de un correo electrónico
      const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      return emailRegex.test(email);
  }

  function simulatePasswordRecovery(email) {
      // Aquí puedes agregar tu lógica para enviar un correo de recuperación de contraseña
      // Simplemente mostrar un mensaje de éxito aquí para demostrar la simulación
      messageDiv.innerHTML = `Se ha enviado un correo de recuperación de contraseña a ${email}.`;
  }
});

continueButton.addEventListener('click', function() {
  // Obtener el valor del correo electrónico ingresado
  const email = emailInput.value;
}