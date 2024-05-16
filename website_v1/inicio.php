<!----------- Carrusel ------------>
<div id="myCarousel" class="slideshow-container">
    <div class="mySlides fade" style="display: block;">
        <img src="images/Slider_1.gif" style="width: 100%">
    </div>

    <div class="mySlides fade" style="display: block;">
        <img src="images/Slider_2.gif" style="width: 100%">

    </div>

    <div class="mySlides fade" style="display: block;">
        <img src="images/Slider_3.gif" style="width: 100%">
    </div>

    <div class="mySlides fade" style="display: block;">
        <img src="images/Slider_4.gif" style="width: 100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div id="dots-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

</div>


<!-- section id="searchBar">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search...">
    <div id="search"><img src="images/lupa.svg"></div>
</section-->

<section class="container categories">
    <h2 class="text-center">Product Overview</h2>
    <div id="categories-list" class="categories-list">

        <?php
        // Incluir el archivo de conexión a la base de datos
        require_once "conecta.php";

        // Consulta SQL para obtener las categorías de productos
        $consulta = "SELECT DISTINCT categoria, imagen FROM productos";
        $resultado = $conexion->query($consulta);

        // Verificar si hay resultados
        if ($resultado->num_rows > 0) {
            // Iterar sobre los resultados y mostrar las categorías
            while ($fila = $resultado->fetch_assoc()) {
                $nombre_categoria = $fila["categoria"];
                $imagen_categoria = $fila["imagen"]; // Ajusta esto según el nombre de tu columna de imágenes

                ?>

                <!-- Mostrar cada categoría -->
                <div class="category">
                    <img src="<?php echo $imagen_categoria; ?>" alt="Imagen de la categoría <?php echo $nombre_categoria; ?>">
                    <a href="#"><?php echo $nombre_categoria; ?></a>
                </div>

                <?php
            }
        } else {
            // Si no hay resultados, mostrar un mensaje de error o manejarlo de otra manera
            echo "No se encontraron categorías.";
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
        ?>

    </div>
</section>

<?php
// Verificar si hay un mensaje de éxito en la URL
if (isset($_GET['success']) && $_GET['success'] == 1) {
    // Mostrar notificación de registro exitoso en inglés utilizando SweetAlert2
    echo '<script>
            Swal.fire({
                icon: "success",
                title: "Registration successful",
                showConfirmButton: false,
                timer: 1500 // Cierra automáticamente la notificación después de 1.5 segundos
            });
          </script>';
}
?>
<script src="javascript/script_category.js"></script>
<script src="javascript/scripts_inicio.js"></script>

