document.getElementById('formAgregarCurso').addEventListener('submit', function (e) {
    e.preventDefault();

    // Validación del campo Número de documento del profesor
    var documentop = document.getElementById('documentop').value;
    if (!/^\d+$/.test(documentop)) {
        alert('Número de documento del profesor debe contener solo números.');
        return;
    }

    // Validación del campo Nombre del Curso
    var nombreCursoP = document.getElementById('nombreCursoP').value;
    if (!/^\d+$/.test(nombreCursoP)) {
        alert('Nombre del Curso debe contener solo números.');
        return;
    }

    // Validación del campo Nombre de la Materia
    var nombreMateriaP = document.getElementById('nombreMateriaP').value;
    if (!/^[a-zA-Z\s]+$/.test(nombreMateriaP)) {
        alert('Nombre de la Materia solo puede contener caracteres o letras.');
        return;
    }

    // Validación para asegurarse de que todos los campos estén llenados
    if (documentop.trim() === '' || nombreCursoP.trim() === '' || nombreMateriaP.trim() === '') {
        alert('Llene todos los campos.');
        return;
    }


    // Continuar con el envío del formulario si todas las validaciones pasan
    this.submit();
});
