<?php
include 'conecta.php';
include 'check_session.php';

// Verificar si se ha enviado el formulario de agregar al carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    // Recuperar los detalles del producto del formulario
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $id = $_POST["id"];

    // Verificar si el producto ya está en el carrito
    $producto_encontrado = false;
    foreach ($_SESSION["carrito"] as $key => $producto) {
        if ($producto["nombre"] === $nombre) {
            // El producto ya está en el carrito, actualiza la cantidad y el precio total
            $_SESSION["carrito"][$key]["cantidad"] += 1;
            $_SESSION["carrito"][$key]["precio_total"] = $_SESSION["carrito"][$key]["cantidad"] * $precio;
            $producto_encontrado = true;
            break;
        }
    }

    // Si el producto no se encontró en el carrito, agrégalo como un nuevo elemento
    if (!$producto_encontrado) {
        $producto = array(
            "nombre" => $nombre,
            "id" => $id,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "cantidad" => 1, // Definir la cantidad inicial como 1
            "precio_total" => $precio // Inicializamos el precio total al precio del producto
        );

        // Agregar el producto al carrito
        $_SESSION["carrito"][] = $producto;
    }
}

// Si se hace clic en el botón "Checkout"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["checkout"])) {
    // Verificar si hay productos en el carrito
    if (!empty($_SESSION["carrito"])) {
        // Obtener el ID del usuario de la sesión
        $usuarioID = $_SESSION['id']; // Suponiendo que el ID del usuario se almacena en $_SESSION['id']

        // Preparar la consulta SQL para insertar los productos en la tabla de compras
        $query = "INSERT INTO compras (UsuarioID, ProductoID, Cantidad, PrecioUnitario, PrecioTotal, FechaCompra, EstadoCompra) VALUES (?, ?, ?, ?, ?, NOW(), 'Pendiente')";

        // Preparar la sentencia
        $statement = $conexion->prepare($query);

        foreach ($_SESSION["carrito"] as $producto) {
            // Calcular el precio total del producto
            $precioTotal = $producto["cantidad"] * $producto["precio"];

            // Ejecutar la sentencia para cada producto en el carrito
            $statement->bind_param("iiidd", $usuarioID, $producto["id"], $producto["cantidad"], $producto["precio"], $precioTotal);
            $statement->execute();
        }

        // Vaciar el carrito después de completar la compra
        unset($_SESSION["carrito"]);
        echo "<script>alert('¡Compra completada con éxito!');</script>";
        header("Location: index.php");
    }
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
            <div id="q-label" class="secc">
                <h3>ID</h3>
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
        if (isset($_SESSION["carrito"]) && !empty($_SESSION["carrito"])) {
            foreach ($_SESSION["carrito"] as $key => $producto) {
                // Calcular el precio total del producto
                $precio_total_producto = $producto["cantidad"] * $producto["precio"];
                $total += $precio_total_producto; // Sumar el precio total de cada producto al total
                ?>
                <div class="item" data-key="<?php echo $key; ?>">
                    <span class="prod-desc"><?php echo $producto["nombre"]; ?></span>
                    <span class="prod-id"><?php echo $producto["id"]; ?></span>
                    <span class="prod-qty"><?php echo $producto["cantidad"]; ?></span> <!-- Mostrar la cantidad del producto -->
                    <span class="prod-price price-<?php echo $key; ?>">$<?php echo $producto["precio"]; ?></span>
                    <span class="prod-total">$<?php echo $precio_total_producto; ?></span> <!-- Mostrar el precio total del producto -->
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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button type="submit" id="quote">Pricing request</button>
            <button type="submit" id="checkout" name="checkout">Checkout</button> <!-- Agregué el nombre "checkout" al botón -->
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="javascript/scripts_cart.js"></script>