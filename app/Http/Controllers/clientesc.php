<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\clientes;

class clientesc extends Controller
{
    public function altacliente()
    {
    		  $clavequesigue = clientes::orderBy('id_cliente','desc')
                                ->take(1)
                                ->get();
        $id_clients = $clavequesigue[0]->id_cliente+1;
       
                return view ('sistema.altacliente')->with('id_clients',$id_clients);
    }

    public function guardacliente(Request $request)
    {
        $id_cliente = $request->id_cliente;
        $nombre = $request->nombre;
        $apellido_p = $request->apellido_p;
        $apellido_m = $request->apellido_m;
        $edad = $request->edad;
        $sexo = $request->sexo;
        $direccion = $request->direccion;
        $telefono = $request->telefono;
        $correo = $request->correo;
       
        
        $this->validate($request,[
             'id_cliente'=>'required|numeric',
             'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_p'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_m'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'edad'=>'required|integer|min:18',
             'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú,.,#]+$/'],
             'telefono'=>'required|numeric',          
             'correo'=>'required|email',      
         ]);

        //echo "Listo para guardar";
        $clien = new clientes;
        $clien->id_cliente = $request->id_cliente; 
        $clien->nombre = $request->nombre;
        $clien->apellido_p = $request->apellido_p;
        $clien->apellido_m = $request->apellido_m;
        $clien->edad = $request->edad;   
        $clien->sexo = $request->sexo;  
        $clien->direccion = $request->direccion;
        $clien->telefono = $request->telefono; 
        $clien->correo = $request->correo; 
        $clien->save();

        $proceso = "Alta cliente";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    }
}
