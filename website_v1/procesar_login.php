<?php

// Verificar si se enviaron datos mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se enviaron datos de inicio de sesión
    if (isset($_POST['correo']) && isset($_POST['contraseña'])) {
        // Incluir el archivo de conexión a la base de datos
        require_once "conecta.php";

        $email = $_POST['correo'];
        $password = $_POST['contraseña'];

        // Consulta SQL para buscar el usuario en la base de datos
        $consulta = "SELECT * FROM usuarios WHERE correo='$email' AND contraseña='$password'";
        $resultado = $conexion->query($consulta);

        if ($resultado->num_rows > 0) {
            // Usuario autenticado, redireccionar a la página principal
            //header("Location: index.php");
            echo"Listo";
            exit();
        } else {
            // Credenciales incorrectas, redireccionar a la página de inicio de sesión con un mensaje de error
            echo"Nada";
            exit();
        }
    }
}

// Si se intenta acceder directamente al archivo procesar_login.php sin datos POST, redireccionar a la página de inicio de sesión
header("Location: login.php");
exit();
?>