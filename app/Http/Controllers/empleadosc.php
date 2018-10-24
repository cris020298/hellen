<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;

class empleadosc extends Controller
{
   public function altaempleado()
    {
    		  $clavequesigue = empleados::orderBy('id_empleado','desc')
                                ->take(1)
                                ->get();
        $id_emps = $clavequesigue[0]->id_empleado+1;
       
                return view ('sistema.altaempleado')->with('id_emps',$id_emps);
    }

    public function guardaempleado(Request $request)
    {
        $id_empleado = $request->id_empleado;
        $tipo = $request->tipo;
        $nombre = $request->nombre;
        $apellido_p = $request->apellido_p;
        $apellido_m = $request->apellido_m;
        $edad = $request->edad;
        $sexo = $request->sexo;
        $direccion = $request->direccion;
        $telefono = $request->telefono;
        $correo = $request->correo;
       
        
        $this->validate($request,[
             'id_empleado'=>'required|numeric',
             'tipo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_p'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_m'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'edad'=>'required|integer|min:18',
             'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú,.,#]+$/'],
             'telefono'=>['regex:/^[0-9]{10}/'],         
             'correo'=>'required|email',      
         ]);

        //echo "Listo para guardar";
        $emp = new empleados;
        $emp->id_empleado = $request->id_empleado; 
        $emp->tipo = $request->tipo;
        $emp->nombre = $request->nombre;
        $emp->apellido_p = $request->apellido_p;
        $emp->apellido_m = $request->apellido_m;
        $emp->edad = $request->edad;   
        $emp->sexo = $request->sexo;  
        $emp->direccion = $request->direccion;
        $emp->telefono = $request->telefono; 
        $emp->correo = $request->correo; 
        $emp->save();

        $proceso = "Alta empleado";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    } 
}
