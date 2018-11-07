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
             'telefono'=>'required|numeric',         
             'correo'=>'required|email',
             'archivo'=>'image|mimes:jpg,png,gif'      
         ]);

        $file = $request->file('archivo');
        if($file!="")
        {
        $ldate = date('Ymd_His_');
        $img = $file->getClientOriginalName();
        $img2 = $ldate.$img;
        \Storage::disk('local')->put($img2, \File::get($file));
        }
        else
        {
            $img2 = 'sinfoto.png';
        }

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
        $emp->activo = $request->activo;
        $emp->archivo = $img2; 
        $emp->save();

        $proceso = "Alta empleado";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    } 
       public function reporteempleado()
    {
        $empleados=empleados::orderBy('id_empleado','asc')->get();
        return view('sistema.reporteempleado')->with('empleados',$empleados);

    }
}
