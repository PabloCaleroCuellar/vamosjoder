<html>
    <head>
        <title>Cuenta usuario</title>
        <style>
            input{
                display: inline;
            }
            table, td, tr, th{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h1>ESTA ES TU CUENTA MACHO</h1>
        {{$idUsu}}
        <table>
            <tr>
                <td rowspan="4">Aqui la foto de perfil del usuario</td>
                <th>ID de usuario:</th>
                <td>{{$usuario->id_usuario}}</td>
            </tr>
            <tr>
                <th>Nombre de usuario:</th>
                <td>{{$usuario->nombre_usuario}}</td>
            </tr>
            <tr>
                <th>Contraseña de usuario(solo estoy probando, quitalo luego):</th>
                <td>{{$usuario->contraseña_usuario}}</td>
            </tr>
            <tr>
                <th>Tipo de cuenta:</th>
                <td>{{$tipoCuenta}}</td>
            </tr>
        </table>
        <?php
            $direc = "volverAula/$idUsu";
        ?>
        <form action="{{url($direc)}}" method="GET">
            <input type="submit" value="Volver al aula"/>
        </form>
        <?php
            $direc = "cambiarDatosUsuario/$idUsu";
        ?>
        <form action="{{url($direc)}}" method="GET">
            @csrf
            <input type="submit" value="Editar perfil"/>
        </form>
        <?php
            $direc = "borrarCuenta/$idUsu";
        ?>
        <form action="{{url($direc)}}" method="POST">
            @csrf
            <input type="submit" value="Borrar cuenta"/>
        </form>
    </body>
</html>