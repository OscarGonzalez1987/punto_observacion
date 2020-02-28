<?php
include 'conexion.php';
$conn = conexion();

$accion = $_GET['accion'];

if($accion == "insertar"){

    $registro = $_POST['registro'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $numero_marcado = $_POST['numero_marcado'];
    $solicitud_llamadas = $_POST['solicitud_llamadas'];
    $contestado = $_POST['contestado'];
    $no_contestado = $_POST['no_contestado'];
    $estado_llamada = $_POST['estado_llamada'];

    $sql="INSERT INTO chequeo(
          registro, fecha, hora, numero_marcado, solicitud_llamadas, contestado, no_contestado, estado_llamada
          )VALUE(
          '$registro', '$fecha', '$hora', '$numero_marcado', '$solicitud_llamadas', '$contestado', '$no_contestado', '$estado_llamada')";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "modificar"){

    $registro = $_POST['registro'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $numero_marcado = $_POST['numero_marcado'];
    $solicitud_llamadas = $_POST['solicitud_llamadas'];
    $contestado = $_POST['contestado'];
    $no_contestado = $_POST['no_contestado'];
    $estado_llamada = $_POST['estado_llamada'];

    $sql="UPDATE chequeo SET
          fecha = '$fecha', 
          hora = '$hora', 
          numero_marcado = '$numero_marcado', 
          solicitud_llamadas = '$solicitud_llamadas', 
          contestado = '$contestado', 
          no_contestado = '$no_contestado', 
          estado_llamada = '$estado_llamada'
          WHERE registro = '$registro'";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "borrar"){

    $registro = $_POST['registro'];

    $sql = "DELETE FROM chequeo
            WHERE registro = '$registro'";

    echo $consulta = mysqli_query($conn, $sql);
}


?>