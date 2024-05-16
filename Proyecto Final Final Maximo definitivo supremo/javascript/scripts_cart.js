$(document).ready(function() {
    // Manejar clic en el botón de eliminar producto del carrito
    $('.delete-btn').click(function() {
        var key = $(this).closest('.item').data('key'); // Obtener el índice del producto en el carrito
        // Realizar la solicitud AJAX para eliminar el producto del carrito
        $.ajax({
            type: 'POST',
            url: 'remove_from_cart.php',
            data: {
                key: key
            },
            success: function(response) {
                // Remover el elemento correspondiente de la lista del carrito
                $('.item[data-key="' + key + '"]').remove();
                // Actualizar el total con la respuesta del servidor (nuevo total)
                $('.sub-total').text('Total: $' + response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});