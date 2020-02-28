<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/funciones_chequeo.js"></script>
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tabla"></div>
	</div>
	<!-- MODAL PARA INSERTAR REGISTROS -->
	<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Agregar cliente</h4>
		    </div>
		    <div class="modal-body">
			<label>registro</label>
			<input type="number" id="registro" class="form-control input-sm" required="">
			<label>fecha</label>
			<input type="date" id="fecha" class="form-control input-sm" required="">
			<label>hora</label>
			<input type="time" id="hora" class="form-control input-sm" required="">
			<label>numero_marcado</label>
			<textarea id="numero_marcado" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>solicitud_llamadas</label>
			<input type="number" id="solicitud_llamadas" class="form-control input-sm" required="">
			<label>contestado</label>
			<input type="number" id="contestado" class="form-control input-sm" required="">
			<label>no_contestado</label>
			<input type="number" id="no_contestado" class="form-control input-sm" required="">
			<label>estado_llamada</label>
			<textarea id="estado_llamada" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
			    Agregar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<!-- MODAL PARA EDICION DE DATOS-->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
		    </div>
		    <div class="modal-body">
			<input type="number" hidden="" id="registrou">
			<label>fecha</label>
			<input type="date" id="fechau" class="form-control input-sm" required="">
			<label>hora</label>
			<input type="time" id="horau" class="form-control input-sm" required="">
			<label>numero_marcado</label>
			<textarea id="numero_marcadou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>solicitud_llamadas</label>
			<input type="number" id="solicitud_llamadasu" class="form-control input-sm" required="">
			<label>contestado</label>
			<input type="number" id="contestadou" class="form-control input-sm" required="">
			<label>no_contestado</label>
			<input type="number" id="no_contestadou" class="form-control input-sm" required="">
			<label>estado_llamada</label>
			<textarea id="estado_llamadau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
			    Actualizar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tabla').load('componentes/vista_chequeo.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    registro = $('#registro').val();
		    fecha = $('#fecha').val();
		    hora = $('#hora').val();
		    numero_marcado = $('#numero_marcado').val();
		    solicitud_llamadas = $('#solicitud_llamadas').val();
		    contestado = $('#contestado').val();
		    no_contestado = $('#no_contestado').val();
		    estado_llamada = $('#estado_llamada').val();
		    agregardatos(registro, fecha, hora, numero_marcado, solicitud_llamadas, contestado, no_contestado, estado_llamada);
		});
		$('#actualizadatos').click(function () {
		    modificarCliente();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
