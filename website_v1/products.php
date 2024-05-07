<?php
// Incluir el archivo de conexión a la base de datos
require_once "conecta.php";

// Obtener la categoría seleccionada de la URL (suponiendo que esté en el parámetro 'categoria')
$categoria_seleccionada = $_GET['categoria'];

// Consulta SQL para obtener nombres, descripciones, precios e imágenes de productos de la categoría seleccionada
$consulta = "SELECT nombre, descripcion, precio, imagen FROM productos WHERE categoria = ?";
$statement = $conexion->prepare($consulta);
$statement->bind_param("s", $categoria_seleccionada);
$statement->execute();
$resultado = $statement->get_result();

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Iterar sobre los resultados y mostrar los productos
    while ($fila = $resultado->fetch_assoc()) {
        $nombre = $fila["nombre"];
        $descripcion = $fila["descripcion"];
        $precio = $fila["precio"];
        $ruta_imagen = $fila["imagen"]; // Obtener la ruta de la imagen de la base de datos

        ?>
        <div class="producto grande">
            <img src="<?php echo $ruta_imagen; ?>" alt="Imagen Producto"> <!-- Utilizar la ruta de la imagen de la base de datos -->
            <div class="texto-producto">
                <h3><?php echo $nombre; ?></h3>
                <p><?php echo $descripcion; ?></p>
                <h4 class="price"><?php echo $precio; ?></h4>
                <!-- Agregar un identificador único al botón -->
                <button class="add" data-nombre="<?php echo $nombre; ?>" data-descripcion="<?php echo $descripcion; ?>" data-precio="<?php echo $precio; ?>">ADD TO CART</button>
            </div>
        </div>
        <?php
    }
} else {
    // Si no hay resultados, mostrar un mensaje de error o manejarlo de otra manera
    echo "No se encontraron productos en la categoría seleccionada.";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>




<!-- Script JavaScript para manejar la adición al carrito -->
<!-- Agregar la librería SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
$(document).ready(function() {
    // Manejar clic en el botón "ADD TO CART"
    $('.add').click(function(e) {
        e.preventDefault(); // Evitar que se envíe el formulario

        // Obtener los detalles del producto del botón
        var nombre = $(this).data('nombre');
        var descripcion = $(this).data('descripcion');
        var precio = $(this).data('precio');
        var cantidad = 1; // Establecer la cantidad por defecto

        // Realizar la solicitud AJAX para agregar el producto al carrito
        $.ajax({
            type: 'POST',
            url: 'cart.php',
            data: {
                nombre: nombre,
                descripcion: descripcion,
                precio: precio,
                cantidad: cantidad, // Enviar la cantidad junto con los otros datos
                add_to_cart: true
            },
            success: function(response) {
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
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
</script>
