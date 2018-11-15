<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\sucursales;
use App\empleados;

class sucursalesc extends Controller
{
    public function altasucursal()
    {
        $clavequesigue = sucursales::orderBy('id_sucursal','desc')
                                ->take(1)
                                ->get();
        $id_sucurs = $clavequesigue[0]->id_sucursal+1;


        $empleados = empleados::where('activo','=','SI')
                             ->orderBy('nombre','asc')
                             ->get();   
        //return $carreras;
        return view ("sistema.altasucursal")
        ->with('empleados',$empleados)
        ->with('id_sucurs',$id_sucurs);
    }
    
    public function guardasucursal(Request $request)
    {
        $id_sucursal = $request->id_sucursal;
        $nombre = $request->nombre;
        $calle = $request->calle;
        $numeroint = $request->numeroint;
        $numeroext = $request->numeroext;
        $colonia = $request->colonia;
        $municipio = $request->municipio;
        $estado = $request->estado;
        $codigopostal = $request->codigopostal;
        $telefono = $request->telefono;
        $activo = $request->activo;
    
        
        $this->validate($request,[
            'id_sucursal'=>'required|numeric',
            'nombre'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'calle'=>'required',['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
            'numeroint'=>['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#,/]+$/'],
            'numeroext'=>'required',['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#,/]+$/'],
            'colonia'=>'required',['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
            'municipio'=>'required',['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
            'estado'=>'required',
            'codigopostal'=>'required|numeric',
            'telefono'=>'required|numeric', 
        ]);

        

        
        $suc = new sucursales;
        $suc->id_sucursal = $request->id_sucursal; 
        $suc->nombre = $request->nombre;
        $suc->calle = $request->calle;
        $suc->numeroint = $request->numeroint;
        $suc->numeroext = $request->numeroext;
        $suc->colonia = $request->colonia;
        $suc->municipio = $request->municipio;
        $suc->estado = $request->estado;
        $suc->codigopostal = $request->codigopostal;
        $suc->telefono = $request->telefono;
        $suc->activo = $request->activo;
       
        $suc->save();

        $proceso = "Alta sucursal";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

        echo "Registro Guardado";
    }
      public function reportesucursal()
    {


      $sucursales=sucursales::orderBy('id_sucursal','asc')->get();
        return view('sistema.reporte_sucursal')->with('sucursales',$sucursales);
// e.  AS s  nombre as e INNER JOIN empleados AS e ON e.id_empleado = s.id_empleado
        // $sucursales=sucursales::orderBy('id_sucursal','asc')->get();
        
      

    }
     public function modificasu($id_sucursal)
    {
        $sucursal = sucursales::where('id_sucursal','=',$id_sucursal)
                            ->get();
        // $id_empleado = $sucursal[0]->id_empleado;
        // $empleado = empleados::where('id_empleado','=',$id_empleado)->get();
        // $otrosempleados = empleados::where('id_empleado','!=',$id_empleado)
        //                     ->get();
        //return $sucros;
    return view('sistema.modificasucursal')
     ->with('sucursal',$sucursal[0]);
    // ->with('id_empleado',$id_empleado)
    // ->with('empleado',$empleado[0]->nombre)
    // ->with('otrosempleados',$otrosempleados);


    }
    public function guardamodificasu(Request $request)
    {
        $id_sucursal = $request->id_sucursal;
        $nombre = $request->nombre;
        $calle = $request->calle;
        $numeroint = $request->numeroint;
        $numeroext = $request->numeroext;
        $colonia = $request->colonia;
        $municipio = $request->municipio;
        $estado = $request->estado;
        $codigopostal = $request->codigopostal;
        $telefono = $request->telefono;
        $activo = $request->activo;
        
        $this->validate($request,[
            
            // 'id_sucursal'=>'required|numeric',
            'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'calle'=>'required',['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
            'numeroint'=>['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#,/]+$/'],
            'numeroext'=>'required',['regex:/^[A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#,/]+$/'],
            'colonia'=>'required',['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
            'municipio'=>'required',['regex:/^[A-Z][A-Z,a-z, ,1-9,0,ñ,á,é,í,ó,ú,.,#]+$/'],
            'estado'=>'required',
            'codigopostal'=>'required|regex:/^[0-9]{5}$/',
            'telefono'=>'required|integer|Min:10|Max:10'
            
        ]);

        


        $suc = sucursales::find($id_sucursal);
        $suc->id_sucursal = $request->id_sucursal; 
        $suc->nombre = $request->nombre;
        $suc->calle = $request->calle;
        $suc->numeroint = $request->numeroint;
        $suc->numeroext = $request->numeroext;
        $suc->colonia = $request->colonia;
        $suc->municipio = $request->municipio;
        $suc->estado = $request->estado;
        $suc->codigopostal = $request->codigopostal;
        $suc->telefono = $request->telefono;
        $suc->activo = $request->activo;
        $suc->save();

        $proceso = "MODIFICA Sucursal";
        $mensaje = "Regristro a sido modificado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

        echo "Listo para modificar";
    }

    public function eliminasu($id_sucursal)
    {
        sucursales::find($id_sucursal)->delete();
        $proceso = "ELIMINAR Sucursales";
        $mensaje = "La sucursal ha sido borrada Correctamente";
        return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }
}
