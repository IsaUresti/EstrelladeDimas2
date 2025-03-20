document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault(); // Evita que el formulario se envíe por defecto

    let formData = new FormData(this);

    fetch("../PHP/Guardar_Reserva.php", {
        method: 'POST',
        body: formData
    })
        .then(response => {
            // Verificar si la respuesta es correcta (código 2xx)
            if (!response.ok) {
                throw new Error('Error en la solicitud: ' + response.statusText);
            }
            return response.json(); // Convertir la respuesta en JSON
        })
        .then(data => {
            let mensajeDiv = document.getElementById('mensaje');
            if (data.success) {
                mensajeDiv.innerHTML = 'Reservación exitosa. Estado: ' + data.estado;
            } else {
                mensajeDiv.innerHTML = 'Error al hacer la reservación: ' + (data.message || 'Desconocido');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            let mensajeDiv = document.getElementById('mensaje');
            mensajeDiv.innerHTML = 'Error al hacer la reservacion. Intente nuevamente.';
        });
});


