<?php
// Habilitar la visualización de errores para depuración (puedes desactivarlo en producción)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establecer la cabecera para la respuesta JSON
header('Content-Type: application/json');

// Función para enviar respuestas JSON y terminar el script
function enviar_respuesta($success, $message) {
    echo json_encode(array("success" => $success, "message" => $message));
    exit();
}

try {
    // Verificar si se enviaron datos mediante el método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se enviaron datos de inicio de sesión
        if (isset($_POST['email']) && isset($_POST['pwd'])) {
            // Incluir el archivo de conexión a la base de datos
            require_once "conecta.php";

            $email = $_POST['email'];
            $password = $_POST['pwd'];

            // Asegúrate de que la conexión a la base de datos se ha establecido correctamente
            if ($conexion->connect_error) {
                enviar_respuesta(false, "Error de conexión a la base de datos: " . $conexion->connect_error);
            }

            // Consulta SQL preparada para buscar el usuario en la base de datos y obtener su nombre y ID
            $consulta = $conexion->prepare("SELECT id, nombre, direccion, numero FROM usuarios WHERE correo=? AND contraseña=?");
            if ($consulta === false) {
                enviar_respuesta(false, "Error en la preparación de la consulta: " . $conexion->error);
            }

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
                $direccionUsuario = $fila['direccion'];
                $numeroUsuario = $fila['numero'];

                // Establecer variables de sesión
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['nombre'] = $nombreUsuario;
                $_SESSION['id'] = $idUsuario;
                $_SESSION['direccion'] = $direccionUsuario;
                $_SESSION['numero'] = $numeroUsuario;

                // Devolver un mensaje JSON indicando el éxito del inicio de sesión
                enviar_respuesta(true, "Inicio de sesión exitoso");
            } else {
                // Credenciales incorrectas, devolver un mensaje JSON indicando el fallo del inicio de sesión
                enviar_respuesta(false, "Credenciales incorrectas");
            }
        } else {
            // Si no se enviaron los datos de inicio de sesión, devolver un mensaje JSON indicando acceso no autorizado
            enviar_respuesta(false, "Datos de inicio de sesión no proporcionados");
        }
    } else {
        // Si se intenta acceder directamente al archivo procesar_login.php sin datos POST, devolver un mensaje JSON indicando acceso no autorizado
        enviar_respuesta(false, "Acceso no autorizado");
    }
} catch (Exception $e) {
    // Manejar cualquier excepción que ocurra
    enviar_respuesta(false, "Excepción capturada: " . $e->getMessage());
}
?>



