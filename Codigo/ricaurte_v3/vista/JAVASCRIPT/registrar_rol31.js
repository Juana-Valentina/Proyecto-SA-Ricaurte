// Función para manejar la selección de rol
document.getElementById("enviarBtn").addEventListener("click", function () {
    var rolSelect = document.getElementById("rolSelect");
    var selectedRol = rolSelect.options[rolSelect.selectedIndex].value;

    if (selectedRol === "profesor") {
        // Aquí puedes redirigir al usuario a la página de profesores
        alert("Has seleccionado el rol de Profesor. Redirigiendo...");
    } else if (selectedRol === "rectoria") {
        // Aquí puedes redirigir al usuario a la página de rectoría
        alert("Has seleccionado el rol de Rectoría. Redirigiendo...");
    } else {
        alert("Por favor, selecciona un rol antes de continuar.");
    }
});

// Función para manejar el botón de cancelar
document.getElementById("cancelarBtn").addEventListener("click", function () {
    // Aquí puedes implementar la lógica para salir o redirigir al usuario
    alert("Has cancelado la selección de rol. Saliendo...");
});
