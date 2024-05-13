document.getElementById("btnCh").addEventListener("click", function () {
    $("#contenedor").load("window_name.php");
});

document.getElementById("btnChAddress").addEventListener("click", function () {
    $("#contenedor").load("window_address.php");
});

document.getElementById("btnChPhNum").addEventListener("click", function () {
    $("#contenedor").load("window_number.php");
});

document.getElementById("btnChEmail").addEventListener("click", function () {
    $("#contenedor").load("window_email.php");
});

document.getElementById("btnChPassword").addEventListener("click", function () {
    $("#contenedor").load("window_password.php");
});

// Agregar confirmación para eliminar cuenta
$('#btnDeleteAcc').click(function () {
    // Mostrar un mensaje de confirmación
    var confirmDelete = confirm("¿Estás seguro de que quieres eliminar tu cuenta? Esta acción no se puede deshacer.");

    // Si el usuario confirma la eliminación, redirige a la página de eliminación de cuenta
    if (confirmDelete) {
        $("#contenedor").load("eliminar_cuenta.php");
    }
});

$(document).ready(function () {
    // Obtener el nombre de usuario de la sesión PHP
    var nombreUsuario = $('#nombre_oculto').text().trim();

    var IdUsuario = $('#id_oculto').text().trim();

    var direccionUsuario = $('#direccion_oculto').text().trim();

    var correoUsuario = $('#correo_oculto').text().trim();

    var numeroUsuario = $('#numero_oculto').text().trim();


    // Actualizar el contenido del elemento h2 con el id "client-name" con el nombre de usuario obtenido
    $('#client-name').text(nombreUsuario);
    $('#client-ID').text("ID: " + IdUsuario);
    $('#nombre').text(nombreUsuario);
    $('#direccion').text(direccionUsuario);
    $('#correo').text(correoUsuario);
    $('#numero').text(numeroUsuario);
    $('#contrasena').text(contrasenaUsuario);

});



function cerrarSesion() {
    $.ajax({
        type: 'GET',
        url: 'logout.php', // El archivo PHP que maneja el cierre de sesión
        success: function (response) {
            // Si el cierre de sesión fue exitoso, recargar la página para aplicar los cambios
            location.reload();
        },
        error: function (xhr, status, error) {
            // Manejar cualquier error que ocurra durante el cierre de sesión
            console.error(error);
        }
    });
}
