<?php
// Incluir el archivo de conexión a la base de datos
require_once "conecta.php";

// Obtener la categoría seleccionada de la URL (suponiendo que esté en el parámetro 'categoria')
$categoria_seleccionada = $_GET['categoria'];

// Consulta SQL para obtener nombres, descripciones, precios e imágenes de productos de la categoría seleccionada
$consulta = "SELECT id, nombre, descripcion, precio, imagen FROM productos WHERE categoria = ?";
$statement = $conexion->prepare($consulta);
$statement->bind_param("s", $categoria_seleccionada);
$statement->execute();
$resultado = $statement->get_result();

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Iterar sobre los resultados y mostrar los productos
    while ($fila = $resultado->fetch_assoc()) {
        $id = $fila["id"];
        $nombre = $fila["nombre"];
        $descripcion = $fila["descripcion"];
        $precio = $fila["precio"];
        $ruta_imagen = $fila["imagen"]; // Obtener la ruta de la imagen de la base de datos

            ?>
        <div class="producto grande">
            <img src="<?php echo $ruta_imagen; ?>" alt="Imagen Producto">
            <!-- Utilizar la ruta de la imagen de la base de datos -->
            <div class="texto-producto">
                <h3><?php echo $nombre; ?></h3>
                <p><?php echo $descripcion; ?></p>
                <h4 class="price"><?php echo $precio; ?></h4>
                <!-- Agregar un identificador único al botón -->
                <button class="add" data-nombre="<?php echo $nombre;
                ?>" data-id="<?php echo $id;
                ?>" data-descripcion="<?php echo $descripcion;
                ?>" data-precio="<?php echo $precio;
                ?>">ADD TO CART</button>
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

<script src="javascript/scripts_products.js"></script>