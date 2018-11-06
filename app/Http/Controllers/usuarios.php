<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\users;

class usuarios extends Controller
{
    public function altausuarios()
    {
    		  $clavequesigue = users::orderBy('id','desc')
                                ->take(1)
                                ->get();
        $id_usu = $clavequesigue[0]->id+1;
       
                return view ('sistema.altausuarios')->with('id_usu',$id_usu);
    }

    public function guardausuarios(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
       
        
        $this->validate($request,[
             'id'=>'required|numeric',
             'name'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
             'email'=>'required|email',
             'password'=>['regex:/^[A-Z,a-z,ñ,á,é,í,ó,ú,0-9]+$/'],         
                   
         ]);

        //echo "Listo para guardar";
        $usu = new users;
        $usu->id = $request->id; 
        $usu->name = $request->name;
        $usu->email = $request->email;
        $usu->password = $request->password; 
        $usu->save();

        $proceso = "Alta usuario";
        $mensaje = "Regristro guardado";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    } 
      public function reporteusuario()
    {
        $users=users::orderBy('id','asc')->get();
        return view('sistema.reporteusuario')->with('users',$users);

    }
}
