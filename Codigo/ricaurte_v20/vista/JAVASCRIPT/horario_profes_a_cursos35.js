document.addEventListener("DOMContentLoaded", function () {
  const profesores = [];

  const formAgregarProfesor = document.getElementById("formAgregarProfesor");
  const listaProfesores = document.getElementById("listaProfesores");

  formAgregarProfesor.addEventListener("submit", function (event) {
      event.preventDefault();
      const nombreProfesor = document.getElementById("nombreProfesor").value.trim();
      const documentoIdentidad = document.getElementById("documentoIdentidad").value.trim();
      const cursoProfesor = document.getElementById("cursoProfesor").value.trim();
      
      if (nombreProfesor !== "" && documentoIdentidad !== "" && cursoProfesor !== "") {
          const profesor = {
              nombre: nombreProfesor,
              documento: documentoIdentidad,
              curso: cursoProfesor
          };
          
          profesores.push(profesor);
          actualizarListaProfesores();
          formAgregarProfesor.reset();
      } else {
          alert("Por favor, complete todos los campos.");
      }
  });

  function actualizarListaProfesores() {
      listaProfesores.innerHTML = "";
      profesores.forEach((profesor, index) => {
          const tr = document.createElement("tr");
          tr.innerHTML = `
              <td><span id="nombre-${index}">${profesor.nombre}</span><input type="text" class="form-control" id="nombre-edit-${index}" style="display: none;"></td>
              <td><span id="documento-${index}">${profesor.documento}</span><input type="text" class="form-control" id="documento-edit-${index}" style="display: none;"></td>
              <td><span id="curso-${index}">${profesor.curso}</span><input type="text" class="form-control" id="curso-edit-${index}" style="display: none;"></td>
              <td>
                  <button class="btn btn-info" onclick="editarProfesor(${index})">Editar</button>
                  <button class="btn btn-success" onclick="guardarProfesor(${index})" style="display: none;">Guardar</button>
              </td>
              <td>
                  <button class="btn btn-danger" onclick="eliminarProfesor(${index})">Eliminar</button>
              </td>
          `;
          listaProfesores.appendChild(tr);
      });
  }

  window.editarProfesor = function (index) {
      // Mostrar campos de edición y ocultar datos
      document.getElementById(`nombre-${index}`).style.display = "none";
      document.getElementById(`nombre-edit-${index}`).style.display = "block";

      document.getElementById(`documento-${index}`).style.display = "none";
      document.getElementById(`documento-edit-${index}`).style.display = "block";

      document.getElementById(`curso-${index}`).style.display = "none";
      document.getElementById(`curso-edit-${index}`).style.display = "block";

      // Ocultar botón "Editar" y mostrar botón "Guardar"
      document.querySelectorAll(`button[onclick="editarProfesor(${index})"]`)[0].style.display = "none";
      document.querySelectorAll(`button[onclick="guardarProfesor(${index})"]`)[0].style.display = "block";
  };

  window.guardarProfesor = function (index) {
      // Obtener los nuevos valores de edición
      const nuevoNombre = document.getElementById(`nombre-edit-${index}`).value.trim();
      const nuevoDocumento = document.getElementById(`documento-edit-${index}`).value.trim();
      const nuevoCurso = document.getElementById(`curso-edit-${index}`).value.trim();

      // Actualizar los datos del profesor
      profesores[index].nombre = nuevoNombre;
      profesores[index].documento = nuevoDocumento;
      profesores[index].curso = nuevoCurso;

      // Ocultar campos de edición y mostrar datos
      document.getElementById(`nombre-${index}`).style.display = "block";
      document.getElementById(`nombre-${index}`).textContent = nuevoNombre;
      document.getElementById(`nombre-edit-${index}`).style.display = "none";

      document.getElementById(`documento-${index}`).style.display = "block";
      document.getElementById(`documento-${index}`).textContent = nuevoDocumento;
      document.getElementById(`documento-edit-${index}`).style.display = "none";

      document.getElementById(`curso-${index}`).style.display = "block";
      document.getElementById(`curso-${index}`).textContent = nuevoCurso;
      document.getElementById(`curso-edit-${index}`).style.display = "none";

      // Ocultar botón "Guardar" y mostrar botón "Editar"
      document.querySelectorAll(`button[onclick="editarProfesor(${index})"]`)[0].style.display = "block";
      document.querySelectorAll(`button[onclick="guardarProfesor(${index})"]`)[0].style.display = "none";
  };

  window.eliminarProfesor = function (index) {
      profesores.splice(index, 1);
      actualizarListaProfesores();
  };
});
