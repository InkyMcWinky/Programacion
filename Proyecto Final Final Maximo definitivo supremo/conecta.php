<?php
    //Informacion para realizar la conexion al servidor
    $servername = "localhost";
    $database = "u408280728_proyecto_wps";
    $username = "u408280728_homeofphobic";
    $password = "Admin4589";
    $conexion = new mysqli('localhost', 'u408280728_homeofphobic', 'Admin4589', 'u408280728_proyecto_wps');
    //Creamos la conexion
    $conn = mysqli_connect($servername, $username, $password, $database);
    //$rev = mysqli_connect("localhost", "root", "root", "proyecto_wps");
    if (!$conn) {
        die("Fallo la conexion: " . mysqli_connect_error());
    }
    //else{
        //echo":c";
    //}
    //mysqli_close($conn);
?>