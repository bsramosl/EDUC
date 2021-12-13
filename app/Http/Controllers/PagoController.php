<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\User;
use App\Models\Curso;
use GuzzleHttp\Client;


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

    public function save(Request $request){
        $validator = $this->validate($request,[
            'pago'=>'required'
        ]);
        $pagodata = request()->except('_token');
        Pago::insert($pagodata);
        return back()->with('pagoguardado','Pago guardado');
    }

    public function editarpago($id){
        $pago = Pago::findOrFail($id);
        return view('pago.editar',compact('pago'));
    }
    

    public function editpago($id){
       $datosPago = request()->except((['_token','_method']));
       Pago::where('id','=',$id)->update($datosPago);
       return back()->with('pagoguardado','Pago modificado');
    }

    public function __construct()
    { 
        $this->client = new Client([
            'base_uri' => 'https://api-m.sandbox.paypal.com'
        ]);
        $this->clientId = env('PAYPAL_CLIENT_ID');
        $this->secret = env('PAYPAL_SECRET');
    }

    private function getAccessToken(){
        $response = $this->client->request('POST', '/vl/oauth2/token', [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => 'grant_type=client_credentials',
                'auth' => [
                    $this->clientId, $this->secret, 'basic'
                ]
            ]
        );
        $data = json_decode($response->getBody(), true);

        return $data['access_token'];
    }
     
    public function proceso($orderId){
        $accessToken = $this->getAccessToken();
        $response = $this->client->request('GET', '/v2/checkout/orders/' . $orderId,[
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => "Bearer $accessToken"
            ]
        ]);

         return (string) ($response->getBody());
    }

}
