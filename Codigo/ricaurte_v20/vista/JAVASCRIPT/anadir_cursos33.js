document.getElementById('formAgregarCurso').addEventListener('submit', function (e) {
    e.preventDefault();

    // Validación del campo Documento del Estudiante
    var idEstudiante = document.getElementById('IdEstudiante').value;
    if (!/^\d+$/.test(idEstudiante)) {
        alert('Documento del Estudiante debe contener solo números.');
        return;
    }

    // Validación para asegurarse de que todos los campos estén llenos
    if (idEstudiante.trim() === '') {
        alert('Llene todos los campos.');
        return;
    }

    // Continuar con el envío del formulario si todas las validaciones pasan
    this.submit();
});
