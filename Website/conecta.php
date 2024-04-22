<?php
    //Informacion para realizar la conexion al servidor
    $servername = "localhost";
    $database = "proyecto_wps";
    $username = "root";
    $password = "";
    $conexion = new mysqli('localhost', 'root', '', 'proyecto_wps');
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