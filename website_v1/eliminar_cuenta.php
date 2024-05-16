<?php
// Incluir el archivo de sesión si es necesario
include 'conecta.php';
include 'check_session.php';

// Verificar si se ha enviado el formulario para eliminar la cuenta
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirm_delete"])) {
    // Aquí puedes agregar la lógica para eliminar la cuenta del usuario de tu base de datos
    // Por ejemplo, podrías ejecutar una consulta SQL para eliminar el registro de usuario
    $usuarioID = $_SESSION['id']; // Suponiendo que el ID del usuario se almacena en $_SESSION['id']
    
    // Preparar la consulta SQL para eliminar la cuenta del usuario
    $query = "DELETE FROM usuarios WHERE id = ?";
    $statement = $conexion->prepare($query);
    $statement->bind_param("i", $usuarioID);
    $statement->execute();

    // Cerrar la sesión después de eliminar la cuenta
    session_unset();
    session_destroy();

    // Redirigir al usuario a la página de inicio de sesión o a cualquier otra página que desees
    header("Location: index.php"); // Reemplaza "index.php" con la URL adecuada
    exit; // Es importante detener la ejecución del script después de redirigir al usuario
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
