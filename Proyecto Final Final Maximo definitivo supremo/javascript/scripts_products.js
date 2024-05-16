$(document).ready(function () {
    // Manejar clic en el botón "ADD TO CART"
    $('.add').click(function (e) {
        e.preventDefault(); // Evitar que se envíe el formulario

        // Obtener los detalles del producto del botón
        var id = $(this).data('id');
        var nombre = $(this).data('nombre');
        var descripcion = $(this).data('descripcion');
        var precio = $(this).data('precio');
        var cantidad = 1; // Establecer la cantidad por defecto

        // Realizar la solicitud AJAX para agregar el producto al carrito
        $.ajax({
            type: 'POST',
            url: 'cart.php',
            data: {
                id: id,
                nombre: nombre,
                descripcion: descripcion,
                precio: precio,
                cantidad: cantidad, // Enviar la cantidad junto con los otros datos
                add_to_cart: true
            },
            success: function (response) {
                // Mostrar una notificación utilizando SweetAlert2
                Swal.fire({
                    icon: 'success',
                    title: 'Producto agregado al carrito exitosamente.',
                    showConfirmButton: false,
                    timer: 1500
                });
                // Cargar el contenido de cart.php en el contenedor deseado (por ejemplo, #cartContainer)
                $('#cartContainer').load('cart.php');
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
});