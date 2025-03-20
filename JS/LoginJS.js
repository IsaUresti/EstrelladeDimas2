document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPagina);

//Declaracion de variables
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

function anchoPagina() {
    if (window.innerWidth > 850) {
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    } else {
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}

anchoPagina();
function iniciarSesion() {

    if (window.innerWidth > 850) {
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else {
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }

}
function register() {

    if (window.innerWidth > 850) {
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else {
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
    
}

// Mostrar/Ocultar contraseña en el formulario de Login
document.getElementById('mostrarContrasenaLogin').addEventListener('change', function () {
    const inputContrasena = document.querySelector('.formulario__login input[name="contrasena"]');
    if (inputContrasena) {
        inputContrasena.type = this.checked ? 'text' : 'password';
    }
});

// Mostrar/Ocultar contraseña en el formulario de Registro
document.getElementById('mostrarContrasenaRegistro').addEventListener('change', function () {
    const inputContrasena = document.querySelector('.formulario__register input[name="contrasena"]');
    if (inputContrasena) {
        inputContrasena.type = this.checked ? 'text' : 'password';
    }
});

document.querySelector(".formulario__register").addEventListener("submit", function (event) {
    const password = document.querySelector('.formulario__register input[name="contrasena"]').value;
    const errorMessage = document.querySelector(".error-message"); // Elemento donde mostrar el mensaje

    // Expresión regular para validar la contraseña
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (!regex.test(password)) {
        errorMessage.textContent = "La contraseña no cumple con los requisitos mínimos. Debe incluir al menos una mayúscula, una minúscula, un número y un carácter especial.";
        errorMessage.style.display = "block"; // Mostrar el mensaje de error
        event.preventDefault(); // Prevenir el envío del formulario si la contraseña no es válida
    } else {
        errorMessage.style.display = "none"; // Ocultar mensaje de error si la contraseña es válida
    }
});

// Mostrar/Ocultar contraseña en el formulario de Registro
document.getElementById('mostrarContrasenaRegistro').addEventListener('change', function () {
    const inputContrasena = document.querySelector('.formulario__register input[name="contrasena"]');
    if (inputContrasena) {
        inputContrasena.type = this.checked ? 'text' : 'password';
    }
});
