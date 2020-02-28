<?php
function conexion(){
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'punto_observacion';
    $conn = mysqli_connect($host, $user, $password, $database);
    return $conn;
}
?>
