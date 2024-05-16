
$(document).ready(function () {
    // Cuando se hace clic en una categoría
    console.log(document.querySelector(".category"))
    $(".category").click(function () {
        // Obtener el texto de la categoría seleccionada
        //var categoriaSeleccionada = $(this).find("a").text();
        var categoriaSeleccionada = $(this).text().trim();
        console.log(categoriaSeleccionada)
        console.log(22)
        // Cargar products.php con el texto de la categoría seleccionada como parámetro en la URL
        $("#contenedor").load("products.php?categoria=" + encodeURIComponent(categoriaSeleccionada));
    });
});
