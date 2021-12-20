<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\User;
use App\Models\Curso;
 
 


class PagoController extends Controller
{
    public function listar(){
        $data['pago'] = Pago::paginate(10);
        return view('pago.listar',$data);
    }

    public function delete($id){
        Pago::destroy($id);
        return back()->with('Pago eliminado');
    }

    public function create(){
        $user=User::all();
        $curso=Curso::all();
        return view('pago.register',compact('user','curso'));
    }
<<<<<<< HEAD
 
=======

>>>>>>> 2262913b9ee39cec56018b1db2f92eb45b0bbc1e
    public function editarpago($id){
        $pago = Pago::findOrFail($id);
        return view('pago.editar',compact('pago'));
    }
    

    public function editpago($id){
       $datosPago = request()->except((['_token','_method']));
       Pago::where('id','=',$id)->update($datosPago);
       return back()->with('pagoguardado','Pago modificado');
    }

    public function myPost()
    {
        return view('principal.index');
    }
      
    public function submitPost(Request $request)
    {
<<<<<<< HEAD
         
        $pagodata = request()->except('_token');
        Pago::insert($pagodata);
        // Sending json response to client
=======
        $validator = $this->validate($request,[
            'pago'=>'required'
        ]); 
        $pagodata = request()->except('_token');
        Pago::insert($pagodata); 
        $input = $request->all(); 
>>>>>>> 2262913b9ee39cec56018b1db2f92eb45b0bbc1e
        return response()->json([
            "status" => true,
            "data" => $pagodata
        ]);
    }
  
}
