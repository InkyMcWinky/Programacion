<!--- Ventana Dirección --->
<section id="change-address" class="window">
    <div class="close" onclick="hideAddress()"></div>
    <h1>Update Information</h1>
    <span>New Address: </span>
    <input type="text" id="newAddress" name="address" placeholder="New Address" required>
    <br><br>
    <button class="update" id="updateAddress">Update</button>
    <button class="cancel" id="cancelAddress">Cancel</button>
</section>

<script>
$(document).ready(function() {
    // Evento de clic en el botón de actualización
    $('#updateAddress').click(function() {
        // Obtener el nuevo nombre de dirección ingresado
        var newAddress = $('#newAddress').val();

        // Realizar la solicitud AJAX al servidor para actualizar la dirección
        $.ajax({
            type: 'POST', // Método HTTP POST para enviar los datos
            url: 'actualizar_direccion.php', // Ruta al script PHP que manejará la actualización
            data: { address: newAddress }, // Datos a enviar al servidor (el nuevo nombre de dirección)
            success: function(response) {
                // Manejar la respuesta del servidor (opcional)
                alert('Dirección actualizada correctamente.');
            },
            error: function(xhr, status, error) {
                // Manejar errores (opcional)
                console.error(error);
            }
        });
    });
});
</script>
