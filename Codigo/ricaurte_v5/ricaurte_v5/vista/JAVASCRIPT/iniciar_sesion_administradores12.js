function login() {
  // Obtener los valores ingresados por el usuario
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  // Validar las credenciales (este es solo un ejemplo; debes implementar tu propia lógica)
  //if (email === "admin@admin.com" && password === "contrasena") { <-- original
    if (password === "contrasena") {

      // Credenciales válidas, redirigir al usuario a la página de inicio
      window.location.href = "panel.html";
  } else {
      // Credenciales inválidas, mostrar un mensaje de error
      alert("Credenciales incorrectas. Intente de nuevo.");
  }
}
