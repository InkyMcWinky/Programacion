<!--- Ventana Teléfono --->
<section id="change-number" class="window">
    <div class="close" onclick="hideAddress()"></div>
    <h1>Update Information</h1>
    <span>New Phone: </span>
    <input type="number" id="phnumber" name="Phone" placeholder="Phone Number" required>
    <br><br>
    <button class="update" id="updatePhone">Update</button>
    <button class="cancel" id="">Cancel</button>
</section>


<script>
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

                alert('Número de teléfono actualizado correctamente.');
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
