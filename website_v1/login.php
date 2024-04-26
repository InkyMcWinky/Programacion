
<?php
include 'conecta.php';
$conexion = new mysqli('localhost', 'root', '', 'proyecto_wps');

// Procesar inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = $_POST["correo"];
    $password = $_POST["contraseña"];

    // Consulta SQL para verificar las credenciales del usuario
    $consulta = "SELECT * FROM usuarios WHERE Correo='$email' AND Contraseña='$password'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows == 1) {
        // Usuario autenticado, redirigir a la página de inicio
        echo"todo bien hermosa, ya entró";
        exit;
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        $error_login = "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>

<div class="contenedor-logs">
    <!-- Formulario de inicio de sesión -->
    <form id="log" class="logs" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Log in</h2>
        <input type="email" id="user" name="email" placeholder="Email" required>
        <input type="password" class="psw" name="pwd" placeholder="Password" required>
        <input type="submit" value="Log in" name="login">
        <span>¿Aún no tienes una cuenta? <a id="btnSignin" href="#">Registrate</a></span>
        
        <?php if (isset($error_login)) { echo "<p class='error'>$error_login</p>"; } ?>
       
    </form>
    
</div>


