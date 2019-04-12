<html>
    <head>
        <title>Cambio datos</title>
        <style>
            input{
                display: inline;
            }
        </style>
    </head>
    <body>
        <h1>CAMBIA TUS DATOS MACHO</h1>
        <?php
            $direc = "confirmarCambiarDatos/$idUsu";
        ?>
        <form action="{{url($direc)}}" method="POST">
            @csrf
            Nombre:<input type="text" name="nombreNew"/>
            Contraseña actual:<input type="text" name="actual"/>
            Contraseña nueva:<input type="password" name="contraseñaNew"/>
            <input type="submit" value="Confirmar cambio de datos"/>
        </form>
    </body>
</html>