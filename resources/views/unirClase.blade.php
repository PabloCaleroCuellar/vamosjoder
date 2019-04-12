<html>
    <head>
        <title>Registro</title>
        <style>
        </style>
    </head>
    <body>
        <h1>UNETE AL AULA</h1>
        <?php
            $direc = "unirseClase/$idUsu";
        ?>
        <form action="{{url($direc)}}" method="POST">
            @csrf
            Contraseña clase: <input type="text" name="clave"/>
            <input type="submit" value="Unirse"/>
        </form>
    </body>
</html>