<?php

$tabla = $_GET['mes'];

include "conexion.php";
$conn = conexion();

$contestado = "";
$no_contestado = "";
$solicitud_llamadas = "";

$sql = "SELECT * FROM chequeo";
$result = mysqli_query($conn, $sql);

WHILE ($fila = mysqli_fetch_assoc($result)) {
    $solicitud_llamadas .= $fila['solicitud_llamadas'] . "||"; 
    $contestado .= $fila['contestado'] . "||";
    $no_contestado .= $fila['no_contestado'] . "||";
    ;
}
?>