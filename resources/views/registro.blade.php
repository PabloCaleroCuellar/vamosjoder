<html>
    <head>
        <title>Registro</title>
        <style>
            input{
                display: inline;
            }
        </style>
    </head>
    <body>
        <h1>ESTAS EN EL REGISTRO MACHO</h1>
        <form action="{{url('registro')}}" method="POST">
            @csrf
            Nombre:<input type="text" name="nombre"/>
            Contraseña:<input type="password" name="contraseña"/>
            Profesor:<input type="checkbox" name="profe"/>
            <input type="submit" value="Registrarse"/>
        </form>
    </body>
</html>