$(document).ready(function() {
    // Agrega un controlador de eventos al botón de registro
    $('#btnSignin').click(function(e) {
        e.preventDefault(); // Evita que se siga el enlace

        // Carga signin.php en el contenedor deseado (por ejemplo, #contenedor)
        $('#contenedor').load('signin.php');
    });

    // Agrega un controlador de eventos al formulario de inicio de sesión
    $('#log').submit(function (e) {
        e.preventDefault(); // Evita que el formulario se envíe automáticamente

        var formData = $(this).serialize(); // Obtén los datos del formulario

        // Realizar inicio de sesión
        $.ajax({
            type: 'POST',
            url: 'procesar_login.php', // Procesar el inicio de sesión en este archivo
            data: formData,
            dataType: 'json', // Esperar una respuesta JSON del servidor
            success: function (response) {
                // Verificar si el inicio de sesión fue exitoso
                if (response.success) {
                    // Si el inicio de sesión fue exitoso, carga inicio.php en el contenedor deseado
                    window.location.reload();

                    // Muestra la notificación de éxito usando SweetAlert2
                    Swal.fire({
                        icon: 'success',
                        title: 'Inicio de sesión exitoso',
                        showConfirmButton: false,
                        timer: 1500 // Cierra automáticamente la notificación después de 1.5 segundos
                    });

                    // Restablecer el formulario si es necesario
                    $('#log')[0].reset();
                } else {
                    // Si el inicio de sesión no fue exitoso, muestra un mensaje de error
                    $('#error_message').text(response.message).show();
                }
            },
            error: function (xhr, status, error) {
                // Si hay un error, muestra el mensaje de error
                console.error(error);
            }
        });
    });
});