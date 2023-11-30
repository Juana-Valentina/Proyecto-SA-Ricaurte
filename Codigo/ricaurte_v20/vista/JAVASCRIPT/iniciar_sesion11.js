function validarInicioSesion() {
    // Obtener los valores de los campos
    var email = document.getElementById("email").value;
    var contrasena = document.getElementById("password").value;

    // Validar que se ingrese un correo institucional
    if (!/\S+@\S+\.\S+/.test(email)) {
        alert("Ingrese un correo institucional válido.");
        return false;
    }

    // Validar Contraseña (letras y números, mínimo 8 caracteres)
    if (!/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/.test(contrasena)) {
        alert("La contraseña debe contener al menos 8 caracteres, incluyendo letras y números.");
        return false;
    }

    // Validar que no haya campos vacíos
    if (email === '' || contrasena === '') {
        alert("Todos los campos son obligatorios.");
        return false;
    }

    // Si todas las validaciones pasan, el formulario se enviará
    return true;
}