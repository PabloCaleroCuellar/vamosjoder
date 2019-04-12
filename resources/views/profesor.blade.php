<html>
    <head>
        <title>Aula</title>
    </head>
    <body>
        <h1>ESTAS EN LA ENTRADA DEL PROFE MACHO</h1>
        <?php
            $direc = "crearAula/$idUsu";
        ?>
        <form action="{{$direc}}" method="POST">
            @csrf
            Nombre clase:<input type="text" name="nombre">
            Contraseña clase:<input type="password" name="contraseña">
            <input type="submit" value="Crear aula"/>
        </form>
    </body>
</html>