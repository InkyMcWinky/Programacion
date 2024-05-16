// Cerrar ventana
    $(".window").click(function() {
        $("#contenedor").load("account.php");
    });

    $(".cancel").click(function() {
        $("#contenedor").load("account.php");
    });
    

// Ventana Nombre
    $(document).ready(function() {
        // Evento de clic en el botón de actualización
        $('#updateName').click(function() {
            // Obtener el nuevo número de teléfono ingresado
            var newName = $('#newName').val();

            // Realizar la solicitud AJAX al servidor para actualizar el número de teléfono
            $.ajax({
                type: 'POST', // Método HTTP POST para enviar los datos
                url: 'actualizar_nombre.php', // Ruta al script PHP que manejará la actualización
                data: {
                    name: newName
                }, // Datos a enviar al servidor (el nuevo número de teléfono)
                success: function(response) {
                    // Manejar la respuesta del servidor (opcional)

                    alert('Name updated correctly');
                },
                error: function(xhr, status, error) {
                    // Manejar errores (opcional)
                    console.error(error);
                }
            });
        });
    });

// Ventana Dirección
$(document).ready(function() {
        // Evento de clic en el botón de actualización
        $('#updateAddress').click(function() {
            // Obtener el nuevo nombre de dirección ingresado
            var newAddress = $('#newAddress').val();

            // Realizar la solicitud AJAX al servidor para actualizar la dirección
            $.ajax({
                type: 'POST', // Método HTTP POST para enviar los datos
                url: 'actualizar_direccion.php', // Ruta al script PHP que manejará la actualización
                data: {
                    address: newAddress
                }, // Datos a enviar al servidor (el nuevo nombre de dirección)
                success: function(response) {
                    // Manejar la respuesta del servidor (opcional)
                    alert('Address updated correctly');
                },
                error: function(xhr, status, error) {
                    // Manejar errores (opcional)
                    console.error(error);
                }
            });
        });
    });

// Ventana Teléfono
$(document).ready(function() {
    // Evento de clic en el botón de actualización
    $('#updatePhone').click(function() {
        // Obtener el nuevo número de teléfono ingresado
        var newPhone = $('#phnumber').val();

        // Realizar la solicitud AJAX al servidor para actualizar el número de teléfono
        $.ajax({
            type: 'POST', // Método HTTP POST para enviar los datos
            url: 'actualizar_numero.php', // Ruta al script PHP que manejará la actualización
            data: { phone: newPhone }, // Datos a enviar al servidor (el nuevo número de teléfono)
            success: function(response) {
                // Manejar la respuesta del servidor (opcional)

                alert('Phone Number updated correctly');
            },
            error: function(xhr, status, error) {
                // Manejar errores (opcional)
                console.error(error);
            }
        });
    });
});

// Ventana Correo
$(document).ready(function() {
        // Evento de clic en el botón de actualización
        $('#updateEmail').click(function() {
            // Obtener el nuevo correo electrónico ingresado
            var newEmail = $('#newEmail').val();

            // Realizar la solicitud AJAX al servidor para actualizar el correo electrónico
            $.ajax({
                type: 'POST', // Método HTTP POST para enviar los datos
                url: 'actualizar_email.php', // Ruta al script PHP que manejará la actualización
                data: {
                    Nemail: newEmail
                }, // Datos a enviar al servidor (el nuevo correo electrónico)
                success: function(response) {
                    // Manejar la respuesta del servidor (opcional)
                    alert('Email updated correctly');
                },
                error: function(xhr, status, error) {
                    // Manejar errores (opcional)
                    console.error(error);
                }
            });
        });
    });

// Ventana Contraseña
$(document).ready(function() {
    // Evento de clic en el botón de actualización
    $('#updatePass').click(function() {
        // Obtener el nuevo correo electrónico ingresado
        var newPassword = $('#newPassword').val();

        // Realizar la solicitud AJAX al servidor para actualizar el correo electrónico
        $.ajax({
            type: 'POST', // Método HTTP POST para enviar los datos
            url: 'actualizar_contrasena.php', // Ruta al script PHP que manejará la actualización
            data: { Npassword: newPassword }, // Datos a enviar al servidor (el nuevo correo electrónico)
            success: function(response) {
                // Manejar la respuesta del servidor (opcional)
                alert('Password updated correctly');
            },
            error: function(xhr, status, error) {
                // Manejar errores (opcional)
                console.error(error);
            }
        });
    });
});