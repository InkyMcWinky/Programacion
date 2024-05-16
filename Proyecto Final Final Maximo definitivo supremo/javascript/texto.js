$(document).ready(function() {
    // Una vez que el documento esté listo, verifica el estado de la sesión
    $.ajax({
        type: 'GET',
        url: 'check_session.php',
        dataType: 'json',
        success: function(response) {
            // Verificar si la sesión está iniciada o no
            if (response.loggedIn === true) {
                // Actualizar el texto del botón con el nombre del usuario
                var nombreUsuario = $('#nombre_oculto').text().trim();
                // Actualizar el contenido del elemento h2 con el id "client-name" con el nombre de usuario obtenido
                $('#logIn').text(nombreUsuario);
            } else {
                // Si no hay una sesión iniciada, mantener el texto del botón como "Log in"
                $('#accountBtn h4').text('Log in');
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});