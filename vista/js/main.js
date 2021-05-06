//$(document).ready(function() {


function cargarBoton() {

    var nombre = 'Edisson';
    var apellidos = 'Camacho Camargo';
    var concatenacion = '';



    for (let index = 0; index < 1; index++) {

        concatenacion += '<tr>';
        concatenacion += '<td>' + nombre + '</td>';
        concatenacion += '<td>' + apellidos + '</td>';
        concatenacion += '<td><button id="mdUsuario" type="button" class="btn btn-success "><span class="glyphicon glyphicon-edit"></span> </button></td>'
        concatenacion += '</tr>';
    }



    // alert(concatenacion);
    $("#tabla").html(concatenacion);







}



$("#btnRegistrar").click(function() {


    var nombres = $("#txtNombre").val();
    var apellidos = $("#txtApellido").val();
    alert(nombres);
    var objData = new FormData();
    objData.append("nombres", nombres);
    objData.append("apellidos", apellidos);

    $.ajax({
        url: "control/usuariosControlador.php",
        type: "post",
        dataType: "json",
        data: objData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {





        }




    })






})














//})