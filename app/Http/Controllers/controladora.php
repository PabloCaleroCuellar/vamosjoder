<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\clase;
use App\usuario;
use App\apuntan;

class controladora extends Controller
{
    public function entrar(Request $peticion){

        //validar los parametros que pasamos por pantalla.

        $usuario = usuario::where('nombre_usuario', $peticion["nombre"])->first();

        if($usuario == null){
            return view('registro');
        }
        else{
            if($usuario->contraseña_usuario != $peticion["contraseña"]){
                return view('login');
            }
            else{

                /*$apuntan = apuntan::where('id_alumno', $usuario->id_usuario)->get();

                $clases = clase::all();*/
                
                if($usuario->profesor == true){
                    return view('profesor')->with('idUsu', $usuario->id_usuario);
                }
                else{
                    return view('aula')->with('idUsu', $usuario->id_usuario);//->with('clases', $apuntan);
                }
            }
        }
    }
    //funcion para entrar que YA LUEGO comentare en detalle

    public function registro(Request $peticion){

        $usuario = new usuario();
        $cuenta = usuario::all();

        $usuario->nombre_usuario = $peticion["nombre"];
        $usuario->contraseña_usuario = $peticion["contraseña"];
        if($peticion["profe"] == true){
            $usuario->profesor = true;
        }
        else{
            $usuario->profesor = false;
        }

        $usuario->save();

        return view('login');
    }
    //funcion para registro que YA LUEGO comentare en detalle

    public function cerrarSesion(){
        return view('login');
    }
    
    //funcion creada para cerrar sesion, te lleva directo a la pantalla de LogIn.
    
    public function borrarCuenta($idUsu){
        
        $usuario = usuario::where('id_usuario', $idUsu);

        /*$user = apuntan::where('id_alumno', $idUsu)->first();

        $user->delete();*/

        $usuario->delete();

        return view('login');
    }
    //funcion para borrarCuenta que YA LUEGO comentare en detalle

    //--------------------------------- DIA 1 --------------------------------

    public function crearAula(Request $peticion, $idUsu){

        $clase = new clase();

        $clase->nombre_clase = $peticion["nombre"];
        $clase->contraseña_clase = $peticion["contraseña"];
        $clase->id_profesor = $idUsu;

        $clase->save();

        return view('profesor')->with('idUsu', $idUsu);
    }
    //funcion para crearAula que YA LUEGO comentare en detalle

    public function unirClase(Request $peticion, $idUsu){
        return view('unirClase')->with('idUsu', $idUsu);
    }

    public function unirseClase(Request $peticion, $idUsu){
        
        $clase = clase::where('contraseña_clase', $peticion["clave"])->first();

        if($clase->contraseña_clase == $peticion["clave"]){
            $apuntan = new apuntan();

            $apuntan->id_alumno = $idUsu;
            $apuntan->id_clase = $clase->id_clase;

            $apuntan->save();

            return view('aula')->with('idUsu', $idUsu);
        }
        else{
            return view('aula')->with('idUsu', $idUsu);
        }
    }

    //--------------------------------- DIA 2 --------------------------------

    public function verCuenta(Request $peticion, $idUsu){

        $usuario = usuario::where('id_usuario', $idUsu)->first();

        $tipoCuenta = "";
        if($usuario->profesor == false){
            $tipoCuenta = "Alumno";
        }
        else{
            $tipoCuenta = "Profesor";
        }

        return view('perfil')->with('idUsu', $idUsu)->with('usuario', $usuario)->with('tipoCuenta', $tipoCuenta);
    }

    //--------------------------------- DIA 3 --------------------------------
    
    public function volverAula($idUsu){
        return view('aula')->with('idUsu', $idUsu);
    }

    public function cambiarDatosUsuario(Request $peticion, $idUsu){
        return view('cambioDatos')->with('idUsu', $idUsu);
    }

    public function confirmarCambiarDatos(Request $peticion, $idUsu){

        $usuario = usuario::where('id_usuario', $idUsu)->first();

        $tipoCuenta = "";
        if($usuario->profesor == false){
            $tipoCuenta = "Alumno";
        }
        else{
            $tipoCuenta = "Profesor";
        }

        if($peticion["nombreNew"] != null){
            $usuario->nombre_usuario = $peticion["nombreNew"];
        }
        if($peticion["actual"] != null){
            if($peticion["actual"] == $usuario->contraseña_usuario){
                $usuario->contraseña_usuario = $peticion["contraseñaNew"];
            }
        }
        return view('perfil')->with('idUsu', $idUsu)->with('usuario', $usuario)->with('tipoCuenta', $tipoCuenta);
    }

    //---------------------------------- DIA 4 -------------------------------------
}
