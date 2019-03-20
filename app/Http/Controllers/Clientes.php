<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cliente;
use App\Usuario;

class Clientes extends Controller
{
    public function crear (Request $request){
       
        $datos = new Usuario();
        $datos->usuario = $request->input('usuario');
        $datos->contraseña = $request->input('contraseña');
        $datos->tipo = '0';
        $datos->privilegios_id = 1; 
        $datos->save();

        return view('registro-exitoso');
   }
}
