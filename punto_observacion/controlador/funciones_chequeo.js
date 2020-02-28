function agregardatos(registro, fecha, hora, numero_marcado, solicitud_llamadas, contestado, no_contestado, estado_llamada){
    cadena = "registro=" + registro +
    "&fecha=" + fecha +
    "&hora=" + hora +
    "&numero_marcado=" + numero_marcado +
    "&solicitud_llamadas=" + solicitud_llamadas +
    "&contestado=" + contestado +
    "&no_contestado=" + no_contestado +
    "&estado_llamada=" + estado_llamada;

    accion = "insertar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#registrou').val(d[0]);
    $('#fechau').val(d[1]);
    $('#horau').val(d[2]);
    $('#numero_marcadou').val(d[3]);
    $('#solicitud_llamadasu').val(d[4]);
    $('#contestadou').val(d[5]);
    $('#no_contestadou').val(d[6]);
    $('#estado_llamadau').val(d[7]);
}

function modificarCliente(){
    registro = $('#registrou').val();
    fecha = $('#fechau').val();
    hora = $('#horau').val();
    numero_marcado = $('#numero_marcadou').val();
    solicitud_llamadas = $('#solicitud_llamadasu').val();
    contestado = $('#contestadou').val();
    no_contestado = $('#no_contestadou').val();
    estado_llamada = $('#estado_llamadau').val();
    cadena = "registro=" + registro +
    "&fecha=" + fecha +
    "&hora=" + hora +
    "&numero_marcado=" + numero_marcado +
    "&solicitud_llamadas=" + solicitud_llamadas +
    "&contestado=" + contestado +
    "&no_contestado=" + no_contestado +
    "&estado_llamada=" + estado_llamada;

    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(registro) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(registro);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(registro) {
    cadena = "registro=" + registro;

    accion = "borrar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/chequeo_modelo.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
            $('#tabla').load('../vista/componentes/vista_chequeo.php');
                alert(mensaje_si);
            } else {
                alert(mensaje_no);
            }
        }
    });
}
