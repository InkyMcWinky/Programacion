<?php
// Incluir el archivo de conexión a la base de datos si es necesario
 require_once "conecta.php";

// Iniciar o reanudar la sesión
session_start();

// Verificar si hay una sesión iniciada
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['email'])) {
    // El correo electrónico del usuario almacenado en la sesión
    $email = $_SESSION['email'];


    // Ejemplo de consulta (debes adaptarla a tu base de datos)
     $consulta = $conexion->prepare("SELECT nombre FROM usuarios WHERE correo = ?");
     $consulta->bind_param("s", $email);
     $consulta->execute();
     $resultado = $consulta->get_result();

    // Si la consulta es exitosa y obtiene el nombre del usuario
     if ($resultado->num_rows > 0) {
         $fila = $resultado->fetch_assoc();
         $nombreUsuario = $fila['nombre'];

    //     // Devolver el nombre del usuario como una respuesta JSON
         echo json_encode(array("name" => $nombreUsuario));
     } else {
         // Si no se encuentra el usuario en la base de datos, devuelve un mensaje de error
         echo json_encode(array("error" => "No se pudo encontrar el nombre del usuario"));
     }

} else {
    // Si no hay una sesión iniciada o el correo electrónico no está definido en la sesión, devuelve un mensaje de error
    echo json_encode(array("error" => "No se pudo obtener el nombre del usuario"));
}
?>