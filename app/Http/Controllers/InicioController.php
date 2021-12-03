<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Curso;
use App\Models\User;
use App\Models\Pago;

class InicioController extends Controller
{
    public function index(){
        $evento=Evento::all();
        $curso=Curso::all();
        return view('principal.index',compact('evento','curso'));
    }

    public function cursos(){
        $data['curso'] = Curso::paginate(10);
        return view('principal.cursos',$data);
    }

    public function curso($id){
        $data['pago'] = Pago::where('user_id',$id)->get();   
        $data['curso'] = Curso::paginate(10);
        return view('principal.curso',$data);
    }

    public function registrocurso($id){
        $data['curso'] = Curso::find($id);;
        return view('principal.registrarcursos',$data);
    }

    public function pago(){
        return view('principal.pago');
    }

    public function perfil($id){
        $usuario = User::findOrFail($id);
        return view('principal.perfil',compact('usuario'));
    }

    public function learning($id){     
        $data['pagos'] = Pago::where('user_id',$id)
        ->get();          
        return view('principal.learning',$data);   

    }
}