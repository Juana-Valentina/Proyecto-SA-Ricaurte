// Evento de escucha para el envío del formulario
document.getElementById('registroForm').addEventListener('submit', function (e) {

    // Validación del campo Nombre Completo
    var nombreCompleto = document.getElementById('nombreCompleto').value;
    if (!/^[a-zA-Z\s]+$/.test(nombreCompleto)) {
        e.preventDefault();
        alert('Nombre Completo debe contener solo letras.');
        return;
    }
  
    // Validación del campo Documento
    var documento = document.getElementById('documento').value;
    if (!/^\d+$/.test(documento)) {
        e.preventDefault();
        alert('Documento debe contener solo números.');
        return;
    }
  
    // Validación del campo Correo Institucional
    var correoInstitucional = document.getElementById('correoInstitucional').value;
    if (!/\S+@\S+\.\S+/.test(correoInstitucional)) {
        e.preventDefault();
        alert('Correo Institucional debe tener un formato válido.');
        return;
    }
  
    // Validación del campo Número de Contacto
    var numeroContacto = document.getElementById('numeroContacto').value;
    if (!/^\d+$/.test(numeroContacto)) {
        e.preventDefault();
        alert('Número de Contacto debe contener solo números.');
        return;
    }
  
    // Validación del campo Contraseña
    var contrasena = document.getElementById('contrasena').value;
    if (!/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/.test(contrasena)) {
        e.preventDefault();
        alert('Contraseña debe contener letras y números, con un mínimo de 8 caracteres.');
        return;
    }
  
    // Validación del campo Rol
    var rol = document.getElementById('rol').value;
    if (rol === 'Seleccione') {
        e.preventDefault();
        alert('Seleccione su rol.');
        return;
    }
  
    // Validación para asegurarse de que todos los campos estén llenados
    var formElements = this.elements;
    for (var i = 0; i < formElements.length; i++) {
        if (formElements[i].type !== 'submit' && formElements[i].value.trim() === '') {
            e.preventDefault();
            alert('Todos los campos deben ser llenados.');
            return;
        }
    }
  });
  