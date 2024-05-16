<?php
include 'conecta.php';
include 'check_session.php';

// Obtener el UsuarioID de la sesión
if (isset($_SESSION['id'])) {
    $usuarioID = $_SESSION['id'];

    // Consulta SQL para obtener las órdenes del usuario actual
    $query = "SELECT * FROM compras WHERE UsuarioID = ?";
    $statement = $conexion->prepare($query);
    $statement->bind_param("i", $usuarioID);
    $statement->execute();
    $result = $statement->get_result();

    // Inicializar una variable para almacenar las filas de la tabla HTML
    $orders_html = "";

    // Verificar si hay órdenes para mostrar
    if ($result->num_rows > 0) {
        // Mostrar las órdenes en la tabla HTML
        while ($row = $result->fetch_assoc()) {
            $orders_html .= "<tr>";
            $orders_html .= "<td>" . $row['ID'] . "</td>";
            $orders_html .= "<td>" . $row['ProductoID'] . "</td>";
            $orders_html .= "<td>" . $row['Cantidad'] . "</td>";
            $orders_html .= "<td>" . $row['PrecioUnitario'] . "</td>";
            $orders_html .= "<td>" . $row['FechaCompra'] . "</td>";
            $orders_html .= "<td>" . $row['precioTotal'] . "</td>";
            $orders_html .= "<td>" . $row['EstadoCompra'] . "</td>";
            $orders_html .= "</tr>";
        }
    } else {
        // Si no hay órdenes, mostrar un mensaje en una fila de la tabla
        $orders_html = '<div class="none escondido">
        <div class="logo-fondo"></div>
        <h3>You don\'t have any <span>orders</span> at the moment...</h3>
        </div>';
    }


}
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
            <div id="btnOrders" class="myitem" onclick="showOrders()">Orders</div>

            <div id="btnSettings" class="myitem" onclick="showSettings()">Settings</div>
        </nav>
        <div id="info-c">
            <table id="orders" class="info-client">
                <tr>
                    <th>Order #</th>
                    <th>Product ID</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Date</th>
                    <th>Total Price</th>
                    <th>Status</th>
                </tr>
                <?php 
                echo $orders_html; 
                ?>
            </table>


            <div id="settings" class="settings">
                <h3>User information</h3>
                <table>
                    <tr>
                        <td>
                            <h4>Name:</h4>
                        </td>
                        <td>
                            <p id="nombre"></p>
                        </td>
                        <td><button id="btnCh">Change Name </button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h4>Shipping address:</h4>
                        </td>
                        <td>
                            <p id="direccion"></p>
                        </td>
                        <td><button id="btnChAddress">Change address</button></td>
                    </tr>

                    <tr>
                        <td>
                            <h4>Phone number:</h4>
                        </td>
                        <td>
                            <p id="numero"></p>
                        </td>
                        <td><button id="btnChPhNum">Change phone number</button></td>
                    </tr>

                </table>

                <br>

                <h3>Account Settings</h3>
                <table>
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
                <br><br>

                <div id="logoutBtn" class="accBtn" onclick="cerrarSesion()">
                    <a href="#">
                        <h4>Log out</h4>
                    </a>
                </div>

                <button id="btnDeleteAcc">Delete account</button>
                

            </div>
        </div>
    </div>

    <div class="oculto">
        <span class="oculto" id="nombre_oculto"><?php echo $_SESSION['nombre']; ?></span>
        <span class="oculto" id="id_oculto"><?php echo $_SESSION['id']; ?></span>
        <span class="oculto" id="direccion_oculto"><?php echo $_SESSION['direccion']; ?></span>
        <span class="oculto" id="correo_oculto"><?php echo $_SESSION['email']; ?></span>
        <span class="oculto" id="contrasena_oculto"><?php echo $_SESSION['contraseña']; ?></span>
        <span class="oculto" id="numero_oculto"><?php echo $_SESSION['numero']; ?></span>
    </div>

</div>


<script src="javascript/scripts_account.js"></script>