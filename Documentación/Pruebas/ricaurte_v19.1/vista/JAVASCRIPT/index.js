// Espera a que el documento esté completamente cargado
document.addEventListener("DOMContentLoaded", function () {
  // Obtén el elemento del botón por su clase
  var ingresarButton = document.querySelector(".btn-custom");

  // Agrega un event listener para el clic en el botón
  ingresarButton.addEventListener("click", function () {
      // Muestra una ventana emergente con el mensaje "Ingresando con éxito"
      alert("¡Ingresando con éxito!");
  });
});
