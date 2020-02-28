<?php
include_once '../../modelo/conexion.php';
$conn = conexion();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>arreglos</title>
</head>
<div class="row"><br><br><br><br>
    <div>
<center>
<h2>chequeo</h2>
</center>
<button class="btn btn-primary navbar-left"
               data-toggle="modal"
               data-target="#modalNuevo">
    Agregar chequeo
    <span class="glyphicon glyphicon-plus"></span>
</button></div>
    <table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>registro</th>
            <th>fecha</th>
            <th>hora</th>
            <th>numero_marcado</th>
            <th>solicitud_llamadas</th>
            <th>contestado</th>
            <th>no_contestado</th>
            <th>estado_llamada</th>
        </tr>
   </thead>
    <tbody>
    <?php
    $sql = 'SELECT * FROM chequeo';
    $result = mysqli_query($conn, $sql);
    WHILE($fila = mysqli_fetch_assoc($result)){
        $datos = $fila['registro'] . "||" .
                  $fila['fecha'] . "||" .
                  $fila['hora'] . "||" .
                  $fila['numero_marcado'] . "||" .
                  $fila['solicitud_llamadas'] . "||" .
                  $fila['contestado'] . "||" .
                  $fila['no_contestado'] . "||" .
                  $fila['estado_llamada'];
    ?>
        <tr>
            <td><?php echo $fila['registro']; ?></td>
            <td><?php echo $fila['fecha']; ?></td>
            <td><?php echo $fila['hora']; ?></td>
            <td><?php echo $fila['numero_marcado']; ?></td>
            <td><?php echo $fila['solicitud_llamadas']; ?></td>
            <td><?php echo $fila['contestado']; ?></td>
            <td><?php echo $fila['no_contestado']; ?></td>
            <td><?php echo $fila['estado_llamada']; ?></td>
            <td>
                <button class="btn btn-warning glyphicon glyphicon-pencil"
                               data-toggle="modal"
                               data-target="#modalEdicion"
                               onclick="agregaform('<?php echo $datos; ?>')">
                </button></td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove"
                           onclick="preguntarSiNo('<?php echo $fila['registro']; ?>')">
                </button>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>
<?php
mysqli_close($conn);
?>
