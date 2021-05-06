$(document).ready(function() {

    alert("hola");
    $("#btnGuardar").click(function() {

        var nombres = $("#txtNombres").val();
        var apellidos = $("#txtApellidos").val();

        var objData = new FormData();
        objData.append("nombres", nombres);
        objData.append("apellidos", apellidos);

        $.ajax({

            url: "control/usuarioControlador.php",
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

    $("#btnModificar").click(function() {

        var modNombres = $("#txtNombres").val();
        var modApellidos = $("#txtApellidos").val();

        var objModificar = new FormData();
        objModificar.append("modNombres", modNombres);
        objModificar.append("modApellidos", modApellidos);

        $.ajax({

            url: "control/usuarioControlador.php",
            type: "post",
            dataType: "json",
            data: objModificar,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {


            }

        })




    })





})