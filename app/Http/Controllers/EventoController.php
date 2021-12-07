<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;


class EventoController extends Controller
{

    public function index(){
        $data['evento'] = Evento::all();
        return view('principal.evento',$data);
    }


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
            'nombre'=>'required|string',
            'descripcion'=>'required|string',
            'fecha'=>'required|date',              
        ]);
        $eventodata = request()->except('_token');
        if($request->hasfile('imagen')){
            $imagen = $request->file('imagen');
            $nombre = 'evento'.'.'.$imagen->getClientOriginalName();
            $destino = public_path('img/evento');
            $request->imagen->move($destino,$nombre);
            $eventodata['imagen']=$nombre; 
        }     
        Evento::insert($eventodata);
        return back()->with('Eventoguardado','Evento Guardado');
    }

    public function editarevento($id){
        $evento = Evento::findOrFail($id);
        return view('evento.editar',compact('evento'));
    }

    public function editevento($id){
       $datosEvento = request()->except((['_token','_method']));
       Evento::where('id','=',$id)->update($datosEvento);
       return back()->with('Eventoguardado','Evento modificado');
    }

    public function regevento($id){
        $data['evento'] = Evento::find($id);;
        return view('principal.registrarevento',$data);
     }
}
