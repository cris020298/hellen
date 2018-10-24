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
        $direccion = $request->direccion;
        $telefono = $request->telefono;
    
        
        $this->validate($request,[
            'id_sucursal'=>'required|numeric',
            'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú,.,#]+$/'],
            'telefono'=>'required|numeric', 
        ]);

        

        //echo "Listo para guardar";
        $suc = new sucursales;
        $suc->id_sucursal = $request->id_sucursal; 
        $suc->nombre = $request->nombre;
        $suc->direccion = $request->direccion;
        $suc->telefono = $request->telefono;
        $suc->id_empleado = $request->id_empleado;
        $suc->save();

        $proceso = "Alta sucursal";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    }
      public function reportesucursal()
    {
        $sucursales=sucursales::orderBy('id_sucursal','asc')->get();
        
        return view('sistema.reporte_sucursal')->with('sucursales',$sucursales);

    }
}
