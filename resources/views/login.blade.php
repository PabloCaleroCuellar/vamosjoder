<html>
    <head>
        <title>Inicio</title>
        <style>
            input{
                display: inline;
            }
        </style>
    </head>
    <body>
        <h1>ESTAS EN EL LOGIN MACHO</h1>
        <form action="{{url('entrar')}}" method="POST">
            @csrf
            Nombre:<input type="text" name="nombre"/>
            Contraseña:<input type="password" name="contraseña"/>
            <input type="submit" value="Entrar"/>
        </form>
    </body>
</html>