<?php
// Iniciar sesión para acceder a las variables de sesión
session_start();

// Verificar si hay una sesión iniciada
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Si hay una sesión iniciada, enviar una respuesta JSON indicando que el usuario está autenticado
    echo json_encode(array("loggedIn" => true));
} else {
    // Si no hay una sesión iniciada, enviar una respuesta JSON indicando que el usuario no está autenticado
    echo json_encode(array("loggedIn" => false));
}
?>
