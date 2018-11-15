<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;
use App\sucursales;
class empleadosc extends Controller
{
   public function altaempleado()
    {
    		  $clavequesigue = empleados::orderBy('id_empleado','desc')
                                ->take(1)
                                ->get();
        $id_emps = $clavequesigue[0]->id_empleado+1;
                $sucursales = sucursales::where('activo','=','SI')
                             ->orderBy('nombre','asc')
                             ->get(); 
       
                return view ('sistema.altaempleado')->with('id_emps',$id_emps)->with('sucursales',$sucursales);
    }

    public function guardaempleado(Request $request)
    {
        $id_empleado = $request->id_empleado;
        $tipo = $request->tipo;
        $nombre = $request->nombre;
        $apellido_p = $request->apellido_p;
        $apellido_m = $request->apellido_m;
        $edad = $request->edad;
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
        
        $this->validate($request,[
             'id_empleado'=>'required|numeric',
             'tipo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_p'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_m'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'edad'=>'required|integer|min:18',
             'calle'=>['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'numeroint'=>['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'numeroext'=>['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'municipio'=>['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'estado'=>'required',
             'codigopostal'=>'required|numeric',
             'telefono'=>'required|numeric',
             'correo'=>'required|email',
             'archivo'=>'image|mimes:jpg,png,gif'      
         ]);

        $emp = new empleados;
        $emp->id_empleado = $request->id_empleado; 
        $emp->tipo = $request->tipo;
        $emp->nombre = $request->nombre;
        $emp->apellido_p = $request->apellido_p;
        $emp->apellido_m = $request->apellido_m;
        $emp->edad = $request->edad;   
        $emp->sexo = $request->sexo;  
        $emp->calle = $request->calle;
        $emp->numeroint = $request->numeroint;
        $emp->numeroext = $request->numeroext;
        $emp->colonia = $request->colonia;
        $emp->municipio = $request->municipio;
        $emp->estado = $request->estado;
        $emp->codigopostal = $request->codigopostal;
        $emp->telefono = $request->telefono; 
        $emp->correo = $request->correo;
        $suc->id_sucursal = $request->id_sucursal;
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
    public function eliminaemp($id_empleado)
    {
        productos::find($id_empleado)->delete();
        $proceso = "ELIMINAR EMPLEADO";
        $mensaje = "El empleado ha sido borrado Correctamente";
        return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }

     public function modificaemp($id_empleado)
    {
        $empleados = empleados::where('id_empleado','=',$id_empleado)
                            ->get();
    return view('sistema.modificaempleado')
    ->with('empleados',$empleados[0]);
    }

     public function guardamodificaemp(Request $request)
    {
        
        $id_empleado = $request->id_empleado;
        $tipo = $request->tipo;
        $nombre = $request->nombre;
        $apellido_p = $request->apellido_p;
        $apellido_m = $request->apellido_m;
        $edad = $request->edad;
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
            
             'id_empleado'=>'required|numeric',
             'tipo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_p'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'apellido_m'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'edad'=>'required|integer|min:18',
             'calle'=>['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'numeroint'=>['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'numeroext'=>['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'municipio'=>['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
             'estado'=>'required',
             'codigopostal'=>'required|numeric',
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

        $emp = empleados::find($id_empleado);
        $emp->id_empleado = $request->id_empleado; 
        $emp->tipo = $request->tipo;
        $emp->nombre = $request->nombre;
        $emp->apellido_p = $request->apellido_p;
        $emp->apellido_m = $request->apellido_m;
        $emp->edad = $request->edad;   
        $emp->sexo = $request->sexo;  
        $emp->calle = $request->calle;
        $emp->numeroint = $request->numeroint;
        $emp->numeroext = $request->numeroext;
        $emp->colonia = $request->colonia;
        $emp->municipio = $request->municipio;
        $emp->estado = $request->estado;
        $emp->codigopostal = $request->codigopostal;
        $emp->telefono = $request->telefono; 
        $emp->correo = $request->correo;
        $emp->id_sucursal = $request->id_sucursal;
        $emp->activo = $request->activo;
        $emp->archivo = $img2;
        
        if($file!="")
        {
            $emp->archivo = $img2;
        }
        $emp->save();

        $proceso = "MODIFICA EMPLEADO";
        $mensaje = "Regristro a sido modificado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

        echo "Listo para modificar";
    }
}
