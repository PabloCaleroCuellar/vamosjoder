<html>
    <head>
        <title>Aula</title>
    </head>
    <body>
        <h1>ESTAS EN EL AULA MACHO</h1>
        <?php
            $direc = "unirClase/$idUsu";
        ?>
        <table>
        <form action="{{url($direc)}}" method="GET">
            <input type="submit" value="Unirse a aula"/>
        </form>
        <?php
            $direc = "verCuenta/$idUsu";
        ?>
        <form action="{{url($direc)}}" method="POST">
            @csrf
            <input type="submit" value="Ver cuenta"/>
        </form>
        <form action="{{url('cerrarSesion')}}" method="GET">
            <input type="submit" value="Cerrar sesion"/>
        </form>
    </body>
</html>