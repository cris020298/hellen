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

        $ven = new ventas;
        $ven->id_venta = $request->id_venta; 
        $ven->fecha_venta = $request->fecha_venta;
        $ven->id_empleado = $request->id_empleado;
        $ven->id_cliente = $request->id_cliente;
        $ven->save();

        $proceso = "Alta venta";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    }
    public function reporteventa()
    {
        $resultado=\DB::select("SELECT v.id_venta,v.fecha_venta,e.nombre as e,c.nombre as c
            FROM ventas AS v
            INNER JOIN empleados AS e ON e.id_empleado = v.id_empleado
            INNER JOIN clientes AS c ON c.id_cliente = v.id_empleado");

        
        return view('sistema.reporteventa')->with('ventas',$resultado);

    }
}
