<?php
// Incluir el archivo de conexión a la base de datos si es necesario
require_once "conecta.php";

// Iniciar o reanudar la sesión
session_start();

// Verificar si el usuario está autenticado
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['email'])) {
    // Obtener el correo electrónico del usuario
    $email = $_SESSION['email'];

    // Obtener el nuevo número de teléfono enviado desde la solicitud AJAX
    $newPhone = $_POST['phone'];

    // Preparar la consulta para actualizar el número de teléfono en la base de datos
    $consulta = $conexion->prepare("UPDATE usuarios SET numero = ? WHERE correo = ?");
    $consulta->bind_param("ss", $newPhone, $email);

    // Ejecutar la consulta
    if ($consulta->execute()) {
        // Enviar una respuesta al cliente (puede ser cualquier cosa, como un mensaje de éxito)
        echo "Número de teléfono actualizado correctamente.";

        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        // Enviar una respuesta al cliente en caso de error
        echo "Error al actualizar el número de teléfono.";
    }
} else {
    // Enviar una respuesta al cliente si el usuario no está autenticado
    echo "Usuario no autenticado.";
}
?>
