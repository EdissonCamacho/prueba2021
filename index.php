<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='vista/css/main.css'>

    <script src='vista/js/usuarios.js'></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mc-fondo ">

            </div>


        </div>

        <br>

        <div class="row">
            <div class="col-lg-6 mc-fondo2 ">

            </div>

            <div class="col-lg-6 mc-fondo ">

            </div>


        </div>

        <div class="row">
            <div class="col-lg-6">
                <form action="">
                    <div class="form-group">
                        <label for="txtNombres">Nombre:</label>
                        <input type="text" class="form-control" id="txtNombres">
                    </div>
                    <div class="form-group">
                        <label for="txtApellidos">Apellido:</label>
                        <input type="text" class="form-control" id="txtApellidos">
                    </div>

                    <button id="btnGuardar" type="button" class="btn btn-primary">Registrar</button>
                </form>



            </div>

            <div class="col-lg-6">

                <h2>Bordered Table</h2>
                <p>The .table-bordered class adds borders to a table:</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tabla">


                    </tbody>
                </table>

            </div>
        </div>





    </div>

















</body>

</html>