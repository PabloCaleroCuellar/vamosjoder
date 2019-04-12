<?php

Route::view('/', 'login');

Route::post('entrar', 'controladora@entrar');

Route::post('registro', 'controladora@registro');

Route::get('cerrarSesion', 'controladora@cerrarSesion');

Route::get('volverAula/{idUsu}', 'controladora@volverAula');

Route::post('borrarCuenta/{idUsu}', 'controladora@borrarCuenta');

//------------------------------------- DIA1 --------------------------------

Route::post('crearAula/{idUsu}', 'controladora@crearAula');

Route::get('unirClase/{idUsu}', 'controladora@unirClase');

Route::post('unirseClase/{idUsu}', 'controladora@unirseClase');

//------------------------------------- DIA2 --------------------------------

Route::post('verCuenta/{idUsu}', 'controladora@verCuenta');

Route::get('cambiarDatosUsuario/{idUsu}', 'controladora@cambiarDatosUsuario');

Route::post('confirmarCambiarDatos/{idUsu}', 'controladora@confirmarCambiarDatos');

//------------------------------------- DIA4 --------------------------------