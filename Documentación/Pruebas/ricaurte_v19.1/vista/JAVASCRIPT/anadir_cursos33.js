document.addEventListener("DOMContentLoaded", function () {
    const cursos = [];

    const formAgregarCurso = document.getElementById("formAgregarCurso");
    const listaCursos = document.getElementById("listaCursos");

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

    window.eliminarCurso = function (index) {
        cursos.splice(index, 1);
        actualizarListaCursos();
    };

    window.editarCurso = function (index) {
        const nuevoNombre = prompt("Ingrese el nuevo nombre del curso:");
        if (nuevoNombre !== null) {
            cursos[index] = nuevoNombre.trim();
            actualizarListaCursos();
        }
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