<?php
include 'check_session.php';

// Inicializar el total a 0
$total = 0;

// Verificar si se ha enviado el índice del producto a eliminar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["key"])) {
    $key = $_POST["key"];

    // Verificar si el índice del producto existe en el carrito
    if (isset($_SESSION["carrito"][$key])) {
        // Obtener el precio del producto a eliminar
        $precioProductoEliminado = $_SESSION["carrito"][$key]["precio"];

        // Eliminar el producto del carrito usando unset()
        unset($_SESSION["carrito"][$key]);
        // Reorganizar los índices del array para evitar huecos
        $_SESSION["carrito"] = array_values($_SESSION["carrito"]);
        
        // Calcular el nuevo total después de eliminar el producto
        foreach ($_SESSION["carrito"] as $producto) {
            $total += $producto["precio"]; // Sumar el precio de cada producto al total
        }
        // Devolver el nuevo total
        echo $total;
    } else {
        echo "El producto no existe en el carrito.";
    }
} else {
    // Si no se proporciona un índice válido, mostrar un mensaje de error
    echo "Índice de producto no válido.";
}
?>