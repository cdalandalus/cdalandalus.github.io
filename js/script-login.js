const correctPassword = "ole";

function checkPassword() {
    const enteredPassword = document.getElementById('password').value;
    const errorMessage = document.getElementById('error-message');

    if (enteredPassword === correctPassword) {
        document.getElementById('login-container').style.display = 'none';
        document.getElementById('content').style.display = 'block';
    } else {
        errorMessage.textContent = "Contraseña incorrecta. Inténtalo de nuevo.";
    }
}
