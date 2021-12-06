<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{

    public function listar(){
        $data['users'] = User::paginate(10);
        return view('dashboard.listarusuario',$data);
    }

    public function delete($id){
        User::destroy($id);
        return back()->with('Usuario eliminado');
    }

    public function editarusuario($id){
        $usuario = User::findOrFail($id);
        return view('dashboard.editarusuario',compact('usuario'));
    }

    public function editarusus(Request $request,$id){
        $datosUsuario = request()->except((['_token','_method'])); 

        if($request->hasfile('imagen')){
            $imagen = $request->file('imagen');
            $nombre = $id.'.'.$imagen->getClientOriginalName();
            $destino = public_path('img/usuario');
            $request->imagen->move($destino,$nombre);
            $datosUsuario['imagen']=$nombre; 
        }              
       User::where('id','=',$id)->update($datosUsuario);
       return back()->with('usuarioModificado','Usuario modificado');
    }
}
