<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
class CursoController extends Controller
{
 
    public function listar(){
        $data['curso'] = Curso::paginate(10);
        return view('curso.listar',$data);
    }

    public function delete($id){
        Curso::destroy($id);
        return back()->with('Curso eliminado');
    }

    public function create(){
        return view('curso.register');
    }

    public function save(Request $request){
        $validator = $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required',
            'fecha'=>'required|date',
            'costo'=>'required',             
        ]);
        $cursodata = request()->except('_token');
        Curso::insert($cursodata);
        return back()->with('cursoguardado','Curso guardado');
    }

    public function editarcurso($id){
        $curso = Curso::findOrFail($id);
        return view('curso.editar',compact('curso'));
    }

    public function editcurso($id){
       $datosCurso = request()->except((['_token','_method']));
       Curso::where('id','=',$id)->update($datosCurso);
       return back()->with('cursoguardado','Curso modificado');
 
    }
}
