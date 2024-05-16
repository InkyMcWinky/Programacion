<?php
// Iniciar o reanudar la sesión
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Finalizar la sesión
session_destroy();

// Cargar la página de inicio en el contenedor deseado
echo '<script>$("#contenedor").load("inicio.php");</script>';
?>
