<!--- Ventana Teléfono --->
<section id="change-number" class="window">
    <div class="close" onclick="hideAddress()"></div>
    <h1>Update Information</h1>
    <span>New Name: </span>
    <input type="text" id="newName" name="name" placeholder="New Name" required>
    <br><br>
    <button class="update" id="updatePhone">Update</button>
    <button class="cancel" id="">Cancel</button>
</section>


<script>
    $(document).ready(function() {
    // Evento de clic en el botón de actualización
    $('#updatePhone').click(function() {
        // Obtener el nuevo número de teléfono ingresado
        var newName = $('#newName').val();

        // Realizar la solicitud AJAX al servidor para actualizar el número de teléfono
        $.ajax({
            type: 'POST', // Método HTTP POST para enviar los datos
            url: 'actualizar_nombre.php', // Ruta al script PHP que manejará la actualización
            data: { name: newName }, // Datos a enviar al servidor (el nuevo número de teléfono)
            success: function(response) {
                // Manejar la respuesta del servidor (opcional)

                alert('Nombre actualizado correctamente.');
            },
            error: function(xhr, status, error) {
                // Manejar errores (opcional)
                console.error(error);
            }
        });
    });
});
</script>
