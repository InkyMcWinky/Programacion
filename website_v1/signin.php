<?php
include 'conecta.php';
$conexion = new mysqli('localhost', 'root', '', 'proyecto_wps');

// Procesar registro
if (isset($_POST['email']) && isset($_POST['pswd']) && isset($_POST['confirm_pswd'])) {
    // Incluir el archivo de conexión a la base de datos
    require_once "conecta.php";

    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $confirm_password = $_POST['confirm_pswd'];

    // Verificar si las contraseñas coinciden
    if ($password !== $confirm_password) {
        // Redireccionar a la página de registro con un mensaje de error
        header("Location: registro.php?error=1");
        exit();
    }

    // Consulta SQL para verificar si el correo electrónico ya está en uso
    $consulta_existencia = "SELECT * FROM usuarios WHERE correo='$email'";
    $resultado_existencia = $conexion->query($consulta_existencia);

    if ($resultado_existencia->num_rows > 0) {
        // El correo electrónico ya está en uso, redireccionar a la página de registro con un mensaje de error
        header("Location: registro.php?error=2");
        exit();
    }

    // Consulta SQL para insertar el nuevo usuario en la base de datos
    $consulta_registro = "INSERT INTO usuarios (correo, contraseña) VALUES ('$email', '$password')";
    if ($conexion->query($consulta_registro) === TRUE) {
        // Usuario registrado exitosamente, redireccionar a la página de inicio exitoso
        echo"yap";
        //header("Location: inicio_exitoso.html");
        exit();
    } else {
        // Error al registrar el usuario, redireccionar a la página de registro con un mensaje de error
        header("Location: registro.php?error=3");
        exit();
    }
}
?>

<div class="contenedor-logs sig">
    <!-- Formulario de registro -->
    <form id="sig" class="logs" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Create an account</h2>
        <input type="text" id="name" name="name" placeholder="Nombre" required>
        <input type="text" id="adress" name="adress" placeholder="Dirección" required>
        <input type="email" id="mail" name="email" placeholder="Email" required>
        <input type="password" class="psw" name="pswd" placeholder="Password" required>
        <input type="password" class="psw" name="confirm_pswd" placeholder="Confirm password" required>
        <input type="submit" value="Sign in" name="register">
        <span>¿Ya tienes una cuenta? <a id="btnSignin" href="#">Inicia Sesión</a></span>
        
        <?php if (isset($error_registro)) { echo "<p class='error'>$error_registro</p>"; } ?>
    </form>
</div>