// Obtener elementos del DOM
const editFullNameButton = document.getElementById('editFullName');
const editPhoneButton = document.getElementById('editPhone');
const saveButton = document.getElementById('saveButton');
const fullnameInput = document.getElementById('fullname');
const phoneInput = document.getElementById('phone');

// Habilitar la edición del nombre completo
editFullNameButton.addEventListener('click', () => {
  fullnameInput.removeAttribute('disabled');
  fullnameInput.focus();
  saveButton.removeAttribute('disabled');
});

// Habilitar la edición del número de teléfono
editPhoneButton.addEventListener('click', () => {
  phoneInput.removeAttribute('disabled');
  phoneInput.focus();
  saveButton.removeAttribute('disabled');
});

// Guardar los cambios
saveButton.addEventListener('click', (e) => {
  e.preventDefault(); // Evitar que el formulario se envíe (puede cambiar esto según tus necesidades)

  // Aquí puedes agregar código para guardar los cambios en el servidor, si es necesario.

  // Deshabilitar la edición y el botón "Guardar Cambios"
  fullnameInput.setAttribute('disabled', true);
  phoneInput.setAttribute('disabled', true);
  saveButton.setAttribute('disabled', true);
});
