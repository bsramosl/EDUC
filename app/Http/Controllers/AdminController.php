<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Curso;
use App\Models\Evento;

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
        return view('dashboard.visualizarevento',$data);
    }
  

}
