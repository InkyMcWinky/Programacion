<?php
include 'conecta.php';
$conexion = new mysqli('localhost', 'root', '', 'proyecto_wps');

// Procesar registro
if (isset($_POST['name']) && isset($_POST['apellido']) && isset($_POST['adress']) && isset($_POST['email']) && isset($_POST['pswd']) && isset($_POST['confirm_pswd']) && isset($_POST['phone'])) {
    // Incluir el archivo de conexión a la base de datos
    require_once "conecta.php";

    $nombre = $_POST['name'] . ' ' . $_POST['apellido'];
    $direccion = $_POST['adress'];
    $telefono = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $confirm_password = $_POST['confirm_pswd'];

    // Verificar si las contraseñas coinciden
    if ($password !== $confirm_password) {
        // Redireccionar a la página de registro con un mensaje de error
        $error_registro = "Las contraseñas no coinciden.";
    } else {
        // Consulta SQL para verificar si el correo electrónico ya está en uso
        $consulta_existencia = "SELECT * FROM usuarios WHERE correo='$email'";
        $resultado_existencia = $conexion->query($consulta_existencia);

        if ($resultado_existencia->num_rows > 0) {
            // El correo electrónico ya está en uso, redireccionar a la página de registro con un mensaje de error
            $error_registro = "El correo electrónico ya está en uso.";
        } else {
            // Consulta SQL para insertar el nuevo usuario en la base de datos
            $consulta_registro = "INSERT INTO usuarios (nombre, direccion, correo, contraseña, Numero) VALUES ('$nombre', '$direccion', '$email', '$password', '$telefono')";
            if ($conexion->query($consulta_registro) === TRUE) {
                // Usuario registrado exitosamente, cargar el formulario de inicio de sesión en el contenedor actual
                echo '<script>$("#contenedor").load("login.php", function() { alert("Registro correcto"); });</script>';
                exit();
            } else {
                // Error al registrar el usuario, redireccionar a la página de registro con un mensaje de error
                $error_registro = "Error al registrar el usuario.";
            }
        }
    }
}
?>

<div class="contenedor-logs sig">
    <!-- Formulario de registro -->
    <form id="sig" class="logs" method="post">
        <h2>Create an account</h2>
        <input type="text" id="name" name="name" placeholder="Nombre" required>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
        <input type="text" id="adress" name="adress" placeholder="Address" required>
        <input type="number" id="phone" name="phone" placeholder="Phone number" required>
        <input type="email" id="mail" name="email" placeholder="Email" required>
        <input type="password" class="psw" name="pswd" placeholder="Password" required>
        <input type="password" class="psw" name="confirm_pswd" placeholder="Confirm password" required>
        <button id="botonSignin" type="button" onclick="submitForm()">Sign in</button>
        <span>¿Ya tienes una cuenta? <a id="btnSignin" href="#">Inicia Sesión</a></span>
        
        <?php if (isset($error_registro)) { echo "<p class='error'>$error_registro</p>"; } ?>
    </form>
</div>

<script src="javascript/scripts_signin.js"></script>

