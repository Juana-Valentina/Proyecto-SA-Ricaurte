document.getElementById('formAgregarCurso').addEventListener('submit', function (e) {
    e.preventDefault(); // Evita que el formulario se envíe automáticamente

    // Validación del campo Nombre del Curso
    var nombreCursoInput = document.getElementById('nombreCursoi');
    var nombreCurso = nombreCursoInput.value.trim();

    // Verifica si el campo está vacío
    if (nombreCurso === '') {
        alert('Por favor, escribe un curso.');
        return;
    }

    // Verifica si el campo contiene solo números
    if (!/^\d+$/.test(nombreCurso)) {
        alert('Nombre del Curso debe contener solo números.');
        return;
    }

    // Verifica si el curso ya existe en la lista
    var listaCursos = document.getElementById('listaCursos');
    var cursosExistentes = listaCursos.getElementsByTagName('strong');
    for (var i = 0; i < cursosExistentes.length; i++) {
        if (cursosExistentes[i].innerText === nombreCurso) {
            alert('Este curso ya existe.');
            return;
        }
    }

    // Si pasa todas las validaciones, puedes continuar con el envío del formulario
    this.submit();
})