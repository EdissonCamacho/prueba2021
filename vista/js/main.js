$(document).ready(function() {

    cargarBoton();

    $("#btnModificar").hide();

    function cargarBoton() {

        var nombre = "Edisson";
        var apellidos = "Camacho Camargo";
        var concatenacion = '';



        for (let index = 0; index < 1; index++) {

            concatenacion += '<tr>';
            concatenacion += '<td>' + nombre + '</td>';
            concatenacion += '<td>' + apellidos + '</td>';
            concatenacion += '<td><button id="mdUsuario" type="button" class="btn btn-success " nombre=' + nombre + ' apellidos=' + apellidos + ' ><span class="glyphicon glyphicon-edit"></span> </button></td>'
            concatenacion += '</tr>';
        }



        // alert(concatenacion);
        $("#tabla").html(concatenacion);







    }

    $("#mdUsuario").click(function() {

        var nombre = $(this).attr("nombre");
        var apellido = $(this).attr("apellidos");

        $("#txtNombres").val(nombre);
        $("#txtApellidos").val(apellido);

        $("#btnModificar").show();




    })

    $("#btnModificar").click(function() {

        var nombreM = $("#txtNombres").val();
        var apellidoM = $("#txtApellidos").val();

        var objData = new FormData();
        objData.append("nombreM", nombreM);
        objData.append("apellidoM", apellidoM);

        $.ajax({
            url: "control/usuariosControlador.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                alert(respuesta);





            }




        })





    })




    $("#btnGuardar").click(function() {


        var nombres = $("#txtNombres").val();
        var apellidos = $("#txtApellidos").val();

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

                alert(respuesta);





            }




        })






    })














})