<?php
// Verificar si se enviaron datos mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se enviaron datos de inicio de sesión
    if (isset($_POST['email']) && isset($_POST['pwd'])) {
        // Incluir el archivo de conexión a la base de datos
        require_once "conecta.php";

        $email = $_POST['email'];
        $password = $_POST['pwd'];

        // Consulta SQL preparada para buscar el usuario en la base de datos y obtener su nombre y ID
        $consulta = $conexion->prepare("SELECT id, nombre FROM usuarios WHERE correo=? AND contraseña=?");
        $consulta->bind_param("ss", $email, $password);
        $consulta->execute();
        $resultado = $consulta->get_result();

        if ($resultado->num_rows > 0) {
            // Usuario autenticado, iniciar sesión
            session_start();

            // Obtener los datos del usuario
            $fila = $resultado->fetch_assoc();
            $nombreUsuario = $fila['nombre'];
            $idUsuario = $fila['id'];

            // Establecer variables de sesión
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['nombre'] = $nombreUsuario;
            $_SESSION['id'] = $idUsuario;

            // Devolver un mensaje JSON indicando el éxito del inicio de sesión
            echo json_encode(array("success" => true, "message" => "Inicio de sesión exitoso"));
            exit();
        } else {
            // Credenciales incorrectas, devolver un mensaje JSON indicando el fallo del inicio de sesión
            echo json_encode(array("success" => false, "message" => "Credenciales incorrectas"));
            exit();
        }
    } else {
        // Si no se enviaron los datos de inicio de sesión, devolver un mensaje JSON indicando acceso no autorizado
        echo json_encode(array("success" => false, "message" => "Datos de inicio de sesión no proporcionados"));
        exit();
    }
} else {
    // Si se intenta acceder directamente al archivo procesar_login.php sin datos POST, devolver un mensaje JSON indicando acceso no autorizado
    echo json_encode(array("success" => false, "message" => "Acceso no autorizado"));
    exit();
}
?>
