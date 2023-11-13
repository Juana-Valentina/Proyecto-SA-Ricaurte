// Función para generar un código de verificación aleatorio
function generateVerificationCode() {
    return Math.floor(1000 + Math.random() * 9000); // Genera un código de 4 dígitos
}

// Variables globales para almacenar el código de verificación
let verificationCode;

// Manejador de evento para el botón "Enviar Código de Verificación"
document.getElementById("sendCode").addEventListener("click", function () {
    userEmail = document.getElementById("email").value;
    verificationCode = generateVerificationCode(); // Genera el código de verificación
    // Simula el envío del código de verificación por correo electrónico (en una aplicación real, se enviaría por correo electrónico)
    alert(`Se ha enviado el código de verificación a ${userEmail}. Código: ${verificationCode}`);
    // Muestra el formulario de ingreso de código de verificación
    document.getElementById("verificationCodeDiv").style.display = "block";
});

// Manejador de evento para el botón "Verificar Código"
document.getElementById("verifyCode").addEventListener("click", function () {
    const enteredCode = document.getElementById("verificationCode").value;
    if (enteredCode === verificationCode.toString()) {
        // Código de verificación válido, muestra el formulario de cambio de contraseña
        document.getElementById("verificationCodeDiv").style.display = "none";
        document.getElementById("passwordChangeDiv").style.display = "block";
    } else {
        alert("Código de verificación incorrecto. Por favor, inténtelo nuevamente.");
    }
});

// Manejador de evento para el botón "Cambiar Contraseña"
document.getElementById("changePassword").addEventListener("click", function () {
    const newPassword = document.getElementById("newPassword").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    if (newPassword === confirmPassword) {
        // Contraseñas coinciden, muestra el mensaje de éxito
        document.getElementById("passwordChangeDiv").style.display = "none";
        document.getElementById("successMessage").style.display = "block";
    } else {
        alert("Las contraseñas no coinciden. Por favor, inténtelo nuevamente.");
    }
});
