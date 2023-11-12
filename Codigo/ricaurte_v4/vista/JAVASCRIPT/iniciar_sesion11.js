$(document).ready(function() {
    // Enlace "Olvidó su contraseña"
    $("#forgotPassword").click(function() {
        var email = prompt("Ingrese su dirección de correo electrónico para restablecer la contraseña:");
        if (email) {
            // Enviar solicitud de restablecimiento de contraseña al servidor
            // Aquí puedes agregar la lógica para enviar el correo de restablecimiento.
        }
    });

    // Validación del formulario de inicio de sesión
    $("#loginForm").submit(function(event) {
        event.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();

        // Aquí puedes agregar la lógica para enviar la información al servidor y realizar la autenticación.
        // Si la autenticación es exitosa, redirige al usuario a su página principal.
        // Si falla, muestra un mensaje de error en la página.
    });
});
