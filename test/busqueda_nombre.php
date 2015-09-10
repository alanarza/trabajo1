<!doctype html>
<html lang="us">
    <head>
        <meta charset="utf-8">
        <title>jQuery UI Example Page</title>
        <link href="../jquery-ui/jquery-ui.css" rel="stylesheet">
    </head>
    <body class="ui-widget ui-widget-content">

        <h1>Buscar empleados por apellido</h1>

        <label>Ingrese parte del apellido: </label>
        <input type="text" name="apellido" id="apellido"/>

        <h3 id="seleccionado">Seleccionado: </h3>
        <script src="../jquery-ui/external/jquery/jquery.js"></script>
        <script src="../jquery-ui/jquery-ui.js"></script>


        <script>
            $(function () {
                $("#apellido").autocomplete({
                    source: "../test/busqueda.php",
                    minLength: 3,
                    select: function (event, ui) {
                        $("#seleccionado").text("Seleccionado: "+ui.item.label);
                    }
                });
            });
        </script>
    </body>
</html>