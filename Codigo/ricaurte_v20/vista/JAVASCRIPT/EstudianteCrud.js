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
    var listaCursos = document.getElementById('listaCursos');
    var cursosExistentes = listaCursos.getElementsByTagName('strong');
    for (var i = 0; i < cursosExistentes.length; i++) {
        if (cursosExistentes[i].innerText === idEstudiante) {
            alert('Este documento ya existe.');
            return;
        }
    }
    // Continuar con el envío del formulario si todas las validaciones pasan
    this.submit();
});
