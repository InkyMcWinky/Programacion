<div class="contenedor-logs">
    <!-- Formulario de inicio de sesión -->
    <form id="log" class="logs" action="procesar_login.php" method="post">
        <h2>Log in</h2>
        <input type="email" id="user" name="email" placeholder="Email" required>
        <input type="password" class="psw" name="pwd" placeholder="Password" required>
        <input type="submit" value="Log in" name="login">
        <span>You don't have an account? <a id="btnSignin" href="#">Sign In</a></span>

        <!-- Mensaje de error (si es necesario) -->
        <p id="error_message" class="error" style="display: none;"></p>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="javascript/scripts_login.js"></script>

