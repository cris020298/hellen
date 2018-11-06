<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Http\Requests;
use App\productos;

class productosc extends Controller
{
	public function altaproducto()
    {
    		  $clavequesigue = productos::orderBy('id_producto','desc')
                                ->take(1)
                                ->get();
        $id_prods = $clavequesigue[0]->id_producto+1;
                return view ('sistema.altaproducto')->with('id_prods',$id_prods);
    }

    public function guardaproducto(Request $request)
    {
        $id_producto = $request->id_producto;
        $modelo = $request->modelo;
        $color = $request->color;
        $numero = $request->numero;
        $estilo = $request->estilo;
        $precio = $request->precio;
        $existencia = $request->existencia;
        
        $this->validate($request,[
             'id_producto'=>'required|numeric',
             'modelo'=>['regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú,0-9]+$/'],
             'color'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'numero'=>'required|numeric',
             'estilo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'precio'=>['regex:/^[0-9]+[.][0-9]{2}$/'],
             'existencia'=>'required|numeric',
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
        
        $prod = new productos;
        $prod->id_producto = $request->id_producto; 
        $prod->modelo = $request->modelo;
        $prod->color = $request->color;
        $prod->estilo = $request->estilo;
        $prod->precio = $request->precio;   
        $prod->numero = $request->numero;  
        $prod->existencia = $request->existencia;
        $prod->activo = $request->activo;
        $prod->archivo = $img2;
        $prod->save();

        $proceso = "Alta Producto";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    }

    public function reporteproducto()
    {
        $productos=productos::orderBy('id_producto','asc')->get();
        return view('sistema.reporteproducto')->with('productos',$productos);

    }
     public function modificapro($id_producto)
    {
        $productos = productos::where('id_producto','=',$id_producto)
                            ->get();
    return view('sistema.modificaproducto')
    ->with('productos',$productos[0]);
    }

     public function guardamodificapro(Request $request)
    {
        $id_producto = $request->id_producto;
        $modelo = $request->modelo;
        $color = $request->color;
        $numero = $request->numero;
        $estilo = $request->estilo;
        $precio = $request->precio;
        $existencia = $request->existencia;
        
        $this->validate($request,[
            
             'id_producto'=>'required|numeric',
             'modelo'=>['regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú,0-9]+$/'],
             'color'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'numero'=>'required|numeric',
             'estilo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'precio'=>['regex:/^[0-9]+[.][0-9]{2}$/'],
             'existencia'=>'required|numeric',
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

        $prod = productos::find($id_producto);
        $prod->id_producto = $request->id_producto; 
        $prod->modelo = $request->modelo;
        $prod->color = $request->color;
        $prod->estilo = $request->estilo;
        $prod->precio = $request->precio;   
        $prod->numero = $request->numero;  
        $prod->existencia = $request->existencia;
        $prod->activo = $request->activo;
        $prod->archivo = $img2;
        if($file!="")
        {
            $prod->archivo = $img2;
        }
        $prod->save();

        $proceso = "MODIFICA PRODUCTO";
        $mensaje = "Regristro a sido modificado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

        echo "Listo para modificar";
    }

    public function eliminapro($id_producto)
    {
        productos::find($id_producto)->delete();
        $proceso = "ELIMINAR PRODUCTO";
        $mensaje = "El producto ha sido borrado Correctamente";
        return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }
}