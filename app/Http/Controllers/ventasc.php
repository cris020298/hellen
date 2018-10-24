<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ventas;
use App\empleados;
use App\clientes;

class ventasc extends Controller
{
  public function altaventa()
    {
        $clavequesigue = ventas::orderBy('id_venta','desc')
                                ->take(1)
                                ->get();
        $id_vens = $clavequesigue[0]->id_venta+1;


        $empleados = empleados::where('activo','=','SI')
                             ->orderBy('nombre','asc')
                             ->get();
        $clientes = clientes::where('activo','=','SI')
                             ->orderBy('nombre','asc')
                             ->get();    
       
        return view ("sistema.altaventa")
        ->with('empleados',$empleados)
        ->with('clientes',$clientes)
        ->with('id_vens',$id_vens);
    }
    
    public function guardaventa(Request $request)
    {
        $id_venta = $request->id_venta;
        $fecha_venta = $request->fecha_venta;
    
    
        
        $this->validate($request,[
            'id_venta'=>'required|numeric',
            'fecha_venta'=>'required|date',
            
        ]);

        

        //echo "Listo para guardar";
        $suc = new ventas;
        $suc->id_sucursal = $request->id_sucursal; 
        $suc->fecha_venta = $request->fecha_venta;
        $suc->id_empleado = $request->id_empleado;
        $suc->id_cliente = $request->id_cliente;
        $suc->save();

        $proceso = "Alta venta";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    }
}
