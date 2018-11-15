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
        $calle = $request->calle;
        $numeroint = $request->numeroint;
        $numeroext = $request->numeroext;
        $colonia = $request->colonia;
        $municipio = $request->municipio;
        $estado = $request->estado;
        $codigopostal = $request->codigopostal;
        $sexo = $request->sexo;
        $telefono = $request->telefono;
        $correo = $request->correo;
       
        
        $this->validate($request,[
             'id_cliente'=>'required|numeric',
             'nombre'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_p'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_m'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'edad'=>'required|integer|min:18',
             'calle'=>['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'numeroint'=>['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'numeroext'=>['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'municipio'=>['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'estado'=>'required',
             'codigopostal'=>'required|numeric',
             'telefono'=>'required|numeric',          
             'correo'=>'required|email'      
         ]);

        //echo "Listo para guardar";
        $clien = new clientes;
        $clien->id_cliente = $request->id_cliente; 
        $clien->nombre = $request->nombre;
        $clien->apellido_p = $request->apellido_p;
        $clien->apellido_m = $request->apellido_m;
        $clien->edad = $request->edad;   
        $clien->sexo = $request->sexo;  
        $clien->calle = $request->calle;
        $clien->numeroint = $request->numeroint;
        $clien->numeroext = $request->numeroext;
        $clien->colonia = $request->colonia;
        $clien->municipio = $request->municipio;
        $clien->estado = $request->estado;
        $clien->codigopostal = $request->codigopostal;
        $clien->telefono = $request->telefono; 
        $clien->correo = $request->correo; 
        $clien->activo = $request->activo;
        $clien->save();

        $proceso = "Alta cliente";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    }
    public function reportecliente()
    {
        $clientes=clientes::orderBy('id_cliente','asc')->get();
        return view('sistema.reportecliente')->with('clientes',$clientes);

    }
}
