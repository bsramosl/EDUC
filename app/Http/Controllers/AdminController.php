<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Curso;
use App\Models\Evento;
use App\Models\PagoEvento;
use App\Models\Pago;

class AdminController extends Controller
{
    public function dashboard(){
        $data['user'] = User::count();
        $data['curso'] = Curso::count();
        $data['evento'] = Evento::count();
        $data['pagcurso'] = Curso::withCount(['pagos'])->get();
        $data['pagevento'] = Evento::withCount(['pagoeventos'])->get();
        return view('principal.dashboard',$data);
    }

    public function listar(){
        $data['evento'] = Evento::paginate(10);
        $data['pagoevento'] = PagoEvento::all();
        return view('dashboard.visualizarevento',$data);
    }

    public function listarcurso(){
        $data['curso'] = Curso::paginate(10); 
        return view('dashboard.visualizarcurso',$data);
    }
  
    public function usuevento($id){
        $data['evento'] = PagoEvento::where('evento_id',$id)
        ->get();          
        return view('dashboard.usuarioevento',$data);
    }

    public function usucurso($id){
        $data['curso'] = Pago::where('curso_id',$id)
        ->get();          
        return view('dashboard.usuariocurso',$data);
    }
     


}
