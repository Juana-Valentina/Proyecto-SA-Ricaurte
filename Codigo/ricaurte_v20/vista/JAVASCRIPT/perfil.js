document.getElementById('FormActualizar').addEventListener('submit', function (e) {
  e.preventDefault();

  // Validación del campo Nombre completo
  var fullname = document.getElementById('fullname').value;
  if (!/^[a-zA-Z\s]+$/.test(fullname)) {
      alert('Nombre completo debe contener solo caracteres.');
      return;
  }

  // Validación del campo Número de Teléfono
  var phone = document.getElementById('phone').value;
  if (!/^\d+$/.test(phone)) {
      alert('Número de Teléfono debe contener solo números.');
      return;
  }

  // Validación para asegurarse de que todos los campos estén llenos
  var formElements = this.elements;
  for (var i = 0; i < formElements.length; i++) {
      if (formElements[i].type !== 'submit' && formElements[i].value.trim() === '') {
          alert('Llene todos los campos.');
          return;
      }
  }

  // Continuar con el envío del formulario si todas las validaciones pasan
  this.submit();
});
