document.addEventListener("DOMContentLoaded", function () {
  const registrationForm = document.getElementById("registration-form");
  const nombreCompleto = document.getElementById("nombreCompleto");
  const documento = document.getElementById("documento");
  const correoInstitucional = document.getElementById("correoInstitucional");
  const numeroContacto = document.getElementById("numeroContacto");
  const contrasena = document.getElementById("contrasena");
  const nombreCompletoError = document.getElementById("nombreCompleto-error");
  const documentoError = document.getElementById("documento-error");
  const correoInstitucionalError = document.getElementById("correoInstitucional-error");
  const numeroContactoError = document.getElementById("numeroContacto-error");
  const contrasenaError = document.getElementById("contrasena-error");
  const registroExitoso = document.getElementById("registroExitoso");

  registrationForm.addEventListener("submit", function (e) {
      e.preventDefault();
      
      // Validación de campos
      const nombreCompletoPattern = /^[A-Za-z]+\s[A-Za-z]+$/;
      const documentoPattern = /^[0-9]{9,}$/;
      const correoInstitucionalPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
      const numeroContactoPattern = /^[0-9]{10}$/;
      const contrasenaPattern = /^(?=.*\d)(?=.*[A-Za-z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

      let valid = true;

      if (!nombreCompleto.value.match(nombreCompletoPattern)) {
          nombreCompletoError.textContent = "Nombre completo no válido.";
          valid = false;
      } else {
          nombreCompletoError.textContent = "";
      }

      if (!documento.value.match(documentoPattern)) {
          documentoError.textContent = "Documento no válido.";
          valid = false;
      } else {
          documentoError.textContent = "";
      }

      if (!correoInstitucional.value.match(correoInstitucionalPattern)) {
          correoInstitucionalError.textContent = "Correo institucional no válido.";
          valid = false;
      } else {
          correoInstitucionalError.textContent = "";
      }

      if (!numeroContacto.value.match(numeroContactoPattern)) {
          numeroContactoError.textContent = "Número de contacto no válido.";
          valid = false;
      } else {
          numeroContactoError.textContent = "";
      }

      if (!contrasena.value.match(contrasenaPattern)) {
          contrasenaError.textContent = "Contraseña no cumple con los requisitos de seguridad.";
          valid = false;
      } else {
          contrasenaError.textContent = "";
      }

      if (valid) {
          registroExitoso.style.display = "block";
          registrationForm.reset();
      }
  });
});
