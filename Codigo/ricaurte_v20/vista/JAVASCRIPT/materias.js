document.getElementById('formAgregarMateria').addEventListener('submit', function (e) {
    e.preventDefault();

    // Validación del campo Nombre de la Materia
    var nombreMateria = document.getElementById('nombreMateriai').value;
    if (!/^[a-zA-Z\s]+$/.test(nombreMateria)) {
        alert('Nombre de la Materia solo puede contener caracteres o letras.');
        return;
    }

    // Validación de materia repetida
    var materiasExistentes = document.querySelectorAll('#listaMaterias strong');
    for (var i = 0; i < materiasExistentes.length; i++) {
        if (materiasExistentes[i].textContent === nombreMateria) {
            alert('Esta materia ya existe.');
            return;
        }
    }

    // Validación de campo vacío
    if (nombreMateria.trim() === '') {
        alert('Por favor, escribe una materia.');
        return;
    }

    // Continuar con el envío del formulario si todas las validaciones pasan
    this.submit();
});
