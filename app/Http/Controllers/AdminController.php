<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Curso;
use App\Models\Evento;
use App\Models\PagoEvento;

class AdminController extends Controller
{
    public function dashboard(){
        $data['user'] = User::count();
        $data['curso'] = Curso::count();
        $data['evento'] = Evento::count();
        return view('principal.dashboard',$data);
    }

    public function listar(){
        $data['evento'] = Evento::paginate(10);
        $data['pagoevento'] = PagoEvento::all();
        return view('dashboard.visualizarevento',$data);
    }
  

}
