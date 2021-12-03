<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;


class EventoController extends Controller
{
    public function listar(){
        $data['evento'] = Evento::paginate(10);
        return view('evento.listar',$data);
    }

    public function delete($id){
        Evento::destroy($id);
        return back()->with('Evento eliminado');
    }

    public function create(){
        return view('evento.register');
    }

    public function save(Request $request){
        $validator = $this->validate($request,[
            'nombre'=>'required|string|max255',
            'descripcion'=>'required|string|max255',
            'fecha'=>'required|date',             
        ]);
        $eventodata = request()->except('_token');
        Evento::insert($eventodata);
        return 'Evento guardado';
    }

    public function editarevento($id){
        $evento = Evento::findOrFail($id);
        return view('evento.editar',compact('evento'));
    }

    public function editevento($id){
       $datosEvento = request()->except((['_token','_method']));
       Evento::where('id','=',$id)->update($datosEvento);
       return back()->with('Eventomodificado','Evento modificado');
    }
}
