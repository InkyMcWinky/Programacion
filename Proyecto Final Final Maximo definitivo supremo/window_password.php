<!--- Ventana Teléfono --->
<section id="change-number" class="window">
    <div class="close" onclick="hideAddress()"></div>
    <h1>Update Information</h1>
    <span>New Paasword: </span>
    <input type="text" id="newEmail" name="Npassword" placeholder="New Password" required>
    <br><br>
    <button class="update" id="updateEmail">Update</button>
    <button class="cancel" id="cancelEmail">Cancel</button>
</section>

<script>
$(document).ready(function() {
    // Evento de clic en el botón de actualización
    $('#updateEmail').click(function() {
        // Obtener el nuevo correo electrónico ingresado
        var newPassword = $('#newPassword').val();

        // Realizar la solicitud AJAX al servidor para actualizar el correo electrónico
        $.ajax({
            type: 'POST', // Método HTTP POST para enviar los datos
            url: 'actualizar_contrasena.php', // Ruta al script PHP que manejará la actualización
            data: { Npassword: newPassword }, // Datos a enviar al servidor (el nuevo correo electrónico)
            success: function(response) {
                // Manejar la respuesta del servidor (opcional)
                alert('Correo electrónico actualizado correctamente.');
            },
            error: function(xhr, status, error) {
                // Manejar errores (opcional)
                console.error(error);
            }
        });
    });
});
</script>
<script src="javascript/scripts_windows.js"></script>
