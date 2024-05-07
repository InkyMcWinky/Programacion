<?php
include 'check_session.php';

// Verificar si se ha enviado el formulario de agregar al carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    // Recuperar los detalles del producto del formulario
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];

    // Crear un array asociativo para almacenar los detalles del producto
    $producto = array(
        "nombre" => $nombre,
        "descripcion" => $descripcion,
        "precio" => $precio
    );

    // Agregar el producto al carrito
    $_SESSION["carrito"][] = $producto;
}

?>

<div class="col-25">
    <h2>Shopping cart</h2>
    <div class="shop-line"></div>
    <div class="shop-cart-big">
        <div class="title-bar">
            <div id="p-label" class="secc">
                <h3>Product</h3>
            </div>
            <div id="s-label" class="secc">
                <h3>Size</h3>
            </div>
            <div id="q-label" class="secc">
                <h3>Quantity</h3>
            </div>
            <div id="u-label" class="secc">
                <h3>Unitary Price</h3>
            </div>
            <div id="t-label" class="secc">
                <h3>Total price</h3>
            </div>
            <div id="d-label" class="secc">
                <h3>Delete</h3>
            </div>
        </div>

        <?php
        $total = 0; // Inicializar el total a 0
        if (!empty($_SESSION["carrito"])) {
            foreach ($_SESSION["carrito"] as $key => $producto) {
                $total += $producto["precio"]; // Sumar el precio de cada producto al total
                ?>
                <div class="item" data-key="<?php echo $key; ?>">
                    <span class="prod-desc"><?php echo $producto["nombre"]; ?></span>
                    <span class="prod-qty">1</span> <!-- Por ahora, siempre asumimos una cantidad de 1 -->
                    <span class="prod-price price-<?php echo $key; ?>">$<?php echo $producto["precio"]; ?></span>
                    <span class="delete-btn">X</span> <!-- Icono de eliminar el producto del carrito -->
                </div>
                <?php
            }
        } else {
            // Si no hay productos en el carrito, mostrar un mensaje indicando que está vacío
            echo "Tu carrito está vacío.";
        }
        ?>
        <div class="totales">
            <span class="sub-total">Total: $<?php echo $total; ?></span>
        </div>
    </div>

    <div class="shop-buttons">
        <button id="quote">Pricing request</button>
        <button id="check">Checkout</button>
    </div>
</div>

<div class="oculto">
            <span class="oculto" id="nombre_oculto"><?php echo $_SESSION['nombre']; ?></span>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
</script>
