<?php
// Habilitar la visualización de errores para depuración (puedes desactivarlo en producción)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de sesión si es necesario
include 'conecta.php';
include 'check_session.php';

// Verificar si se ha enviado el formulario para eliminar la cuenta
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirm_delete"])) {
    // Verificar que el ID del usuario esté en la sesión
    if (isset($_SESSION['id'])) {
        $usuarioID = $_SESSION['id']; // Suponiendo que el ID del usuario se almacena en $_SESSION['id']

        // Iniciar una transacción
        $conexion->begin_transaction();

        try {
            // Eliminar las filas dependientes en la tabla 'compras'
            $queryCompras = "DELETE FROM compras WHERE UsuarioID = ?";
            $stmtCompras = $conexion->prepare($queryCompras);
            $stmtCompras->bind_param("i", $usuarioID);
            $stmtCompras->execute();
            $stmtCompras->close();

            // Ahora eliminar la cuenta del usuario en la tabla 'usuarios'
            $queryUsuario = "DELETE FROM usuarios WHERE id = ?";
            $stmtUsuario = $conexion->prepare($queryUsuario);
            $stmtUsuario->bind_param("i", $usuarioID);
            $stmtUsuario->execute();

            // Confirmar la transacción
            $conexion->commit();

            // Cerrar la sesión después de eliminar la cuenta
            session_unset();
            session_destroy();

            // Redirigir al usuario a la página de inicio de sesión o a cualquier otra página que desees
            header("Location: index.php"); // Reemplaza "index.php" con la URL adecuada
            exit; // Es importante detener la ejecución del script después de redirigir al usuario
        } catch (Exception $e) {
            // Revertir la transacción en caso de error
            $conexion->rollback();
            echo "No se pudo eliminar la cuenta. Por favor, inténtelo de nuevo. Error: " . $e->getMessage();
        }
    } else {
        echo "No hay un ID de usuario en la sesión.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
</head>
<body>
    <div id="dltAcc" class="logs">
        <h2>Delete Account</h2>
        <p>Are you sure you want to delete your account? </p>
        <P>This action cannot be undone and you will lose all of your progress...</P>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button type="submit" name="confirm_delete">Delete account</button>
        </form>

    </div>
</body>
</html>