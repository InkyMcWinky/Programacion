<?php
include 'conecta.php';
include 'check_session.php';
?>


<div class="oculto">
    <span class="oculto" id="nombre_oculto"><?php echo $_SESSION['nombre']; ?></span>
</div>


<div id="menu-cliente">
    <div class="cliente-label">
        <div class="lbl">
            <h2 id="client-name">NombreUsuario</h2>
        </div>
        <div class="lbl">
            <h3 id="client-ID">client_account</h3>
        </div>
    </div>

    <div class="divided">
        <nav id="menuAcc" class="menu-a">
            <div id="btnOrders" class="myitem">Orders</div>

            <div id="btnSettings" class="myitem">Settings</div>
        </nav>
        <div id="info-c">
            <table id="orders" class="info-client escondido">
                <tr>
                    <th>Order #</th>
                    <th>Series</th>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Currency</th>
                    <th>Total</th>
                    <th>Departures</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>145245</td>
                    <td>OCC</td>
                    <td>285</td>
                    <td>04/17/2023</td>
                    <td>USD</td>
                    <td>$1, 204.25</td>
                    <td>2</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>145245</td>
                    <td>OCC</td>
                    <td>285</td>
                    <td>04/17/2023</td>
                    <td>USD</td>
                    <td>$1, 204.25</td>
                    <td>2</td>
                    <td>Pending</td>
                </tr>

            </table>

            <div class="none escondido">
                <div class="logo-fondo"></div>
                <h3>You don't have any <span>orders</span> at the moment...</h3>
            </div>

            <div id="set" class="settings">
                <h3>User information</h3>
                <table>
                    <tr>
                        <td>
                            <h4>Name:</h4>
                        </td>
                        <td>
                            <p id="nombre"></p>
                        </td>
                        <td><button id="btnChName">Change name</button></td>
                    </tr>

                    </tr>
                    <tr>
                        <td>
                            <h4>Shipping address:</h4>
                        </td>
                        <td>
                            <p id="dire"></p>
                        </td>
                        <td><button id="btnChAddress">Change address</button></td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Phone number:</h4>
                        </td>
                        <td>
                            <p>+52 6484 15641</p>
                        </td>
                        <td><button id="btnChPhNum">Change phone number</button></td>
                    </tr>
                </table>

                <br>

                <h3>Account Settings</h3>
                <table>
                    <tr>
                        <td>
                            <h4>User name:</h4>
                        </td>
                        <td>
                            <p>user_name</p>
                        </td>
                        <td><button id="btnChUser">Change username</button></td>
                    </tr>
                    <tr>
                        <td>
                            <h4>User email:</h4>
                        </td>
                        <td>
                            <p id="correo"></p>
                        </td>
                        <td><button id="btnChEmail">Change email</button></td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Password:</h4>
                        </td>
                        <td>
                            <p id="contrasena"></p>
                        </td>
                        <td><button id="btnChPassword">Change Password</button></td>
                    </tr>

                </table>
                <br><br><br>

                <button id="btnDeleteAcc">Delete account</button>

            </div>
        </div>
    </div>

    <div class="oculto">
        <span class="oculto" id="nombre_oculto"><?php echo $_SESSION['nombre']; ?></span>
        <span class="oculto" id="id_oculto"><?php echo $_SESSION['id']; ?></span>
        <span class="oculto" id="direccion_oculto"><?php echo $_SESSION['address']; ?></span>
        <span class="oculto" id="correo_oculto"><?php echo $_SESSION['email']; ?></span>
        <span class="oculto" id="contrasena_oculto"><?php echo $_SESSION['password']; ?></span>
    </div>



</div>


<script>
    $(document).ready(function () {
        // Obtener el nombre de usuario de la sesión PHP
        var nombreUsuario = $('#nombre_oculto').text().trim();

        var IdUsuario = $('#id_oculto').text().trim();

        var direccionUsuario = $('#direccion_oculto').text().trim();

        var correoUsuario = $('#correo_oculto').text().trim();

        
        var contrasenaUsuario = $('#contrasena_oculto').text().trim();

        // Actualizar el contenido del elemento h2 con el id "client-name" con el nombre de usuario obtenido
        $('#client-name').text(nombreUsuario);
        $('#client-ID').text("ID: " + IdUsuario);
        $('#nombre').text(nombreUsuario);
        $('#dire').text(direccionUsuario);
        $('#correo').text(correoUsuario);
        $('#contrasena').text(contrasenaUsuario);

        // Agregar confirmación para eliminar cuenta
        $('#btnDeleteAcc').click(function() {
            // Mostrar un mensaje de confirmación
            var confirmDelete = confirm("¿Estás seguro de que quieres eliminar tu cuenta? Esta acción no se puede deshacer.");

            // Si el usuario confirma la eliminación, redirige a la página de eliminación de cuenta
            if (confirmDelete) {
                window.location.href = "eliminar_cuenta.php"; // Reemplaza "eliminar_cuenta.php" con la URL adecuada
            }
        });
    });
</script>
