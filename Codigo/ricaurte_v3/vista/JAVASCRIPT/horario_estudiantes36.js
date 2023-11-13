document.addEventListener("DOMContentLoaded", function () {
    const cursos = [];
    const materias = [];

    const formAgregarCurso = document.getElementById("formAgregarCurso");
    const formAgregarMateria = document.getElementById("formAgregarMateria");
    const listaCursos = document.getElementById("listaCursos");
    const listaMaterias = document.getElementById("listaMaterias");

    formAgregarCurso.addEventListener("submit", function (event) {
        event.preventDefault();
        const nombreCurso = document.getElementById("nombreCurso").value.trim();
        if (nombreCurso !== "") {
            cursos.push(nombreCurso);
            actualizarListaCursos();
            formAgregarCurso.reset();
        } else {
            alert("Por favor, ingrese el nombre del curso.");
        }
    });

    formAgregarMateria.addEventListener("submit", function (event) {
        event.preventDefault();
        const nombreMateria = document.getElementById("nombreMateria").value.trim();
        if (nombreMateria !== "") {
            materias.push(nombreMateria);
            actualizarListaMaterias();
            formAgregarMateria.reset();
        } else {
            alert("Por favor, ingrese el nombre de la materia.");
        }
    });

    function actualizarListaCursos() {
        listaCursos.innerHTML = "";
        cursos.forEach((curso, index) => {
            const tr = document.createElement("tr");
            tr.innerHTML = `
                <td>${curso}</td>
                <td>
                    <button class="btn btn-info" onclick="editarCurso(${index})">Editar</button>
                </td>
                <td>
                    <button class="btn btn-danger" onclick="eliminarCurso(${index})">Eliminar</button>
                </td>
            `;
            listaCursos.appendChild(tr);
        });
    }

    function actualizarListaMaterias() {
        listaMaterias.innerHTML = "";
        materias.forEach((materia, index) => {
            const tr = document.createElement("tr");
            tr.innerHTML = `
                <td>${materia}</td>
                <td>
                    <button class="btn btn-info" onclick="editarMateria(${index})">Editar</button>
                </td>
                <td>
                    <button class="btn btn-danger" onclick="eliminarMateria(${index})">Eliminar</button>
                </td>
            `;
            listaMaterias.appendChild(tr);
        });
    }

    window.editarCurso = function (index) {
        const nuevoNombre = prompt("Ingrese el nuevo nombre del curso:");
        if (nuevoNombre !== null) {
            cursos[index] = nuevoNombre.trim();
            actualizarListaCursos();
        }
    };

    window.editarMateria = function (index) {
        const nuevoNombre = prompt("Ingrese el nuevo nombre de la materia:");
        if (nuevoNombre !== null) {
            materias[index] = nuevoNombre.trim();
            actualizarListaMaterias();
        }
    };

    window.eliminarCurso = function (index) {
        cursos.splice(index, 1);
        actualizarListaCursos();
    };

    window.eliminarMateria = function (index) {
        materias.splice(index, 1);
        actualizarListaMaterias();
    };
});

// Agregar un evento click al botón "Guardar"
document.getElementById("btnGuardar").addEventListener("click", function () {
    // Mostrar una ventana emergente de confirmación
    var confirmacion = confirm("¿Desea guardar?");

    // Comprobar la respuesta
    if (confirmacion) {
        alert("Guardado exitosamente.");
        // Aquí puedes agregar la lógica para guardar los datos
    } else {
        alert("No se guardaron los datos.");
    }
});