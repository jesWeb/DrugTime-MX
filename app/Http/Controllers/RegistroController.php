<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Registro;
use App\Http\Controllers\ClientesController;
use App\Models\typeUser;
class RegistroController extends Controller
{


    //iniciar sesion

     //vista principal
     public function index()
     {
          //vista
          return view('logeo.login');
      }  


      //------------------validadion--------------------//
     public function validar(Request $request){
        $email = $request->input('email');
        $pass = $request->input('pass');
        
        $consulta = Cliente::where('email', '=',$email )
        ->where('pass', '=',$pass)
        ->get();

 
    if (count($consulta)==0) {
        # vista de si no es encontrado
        return view('login');
    }
    else {
        # crear la session 
        $request->session()->put('session_id',$consulta[0]->id_cliente);
        $request->session()->put('session_name',$consulta[0]->nombre);
        $request->session()->put('session_tipo',$consulta[0]->id_typeuser);
        
        #consultar la session 
        $session_id = $request->session()->get('session_id');
        $session_name = $request->session()->get('session_name');
        $session_tipo = $request->session()->get('session_tipo');
        //------ //
        if ($session_tipo == 1 ){return view("");}
        else {
            if($session_tipo == 2){return view("");}
            else {
                return view("");
            }
        }
    }
     
     }

     //---------------------Logout-----------------//

     public function logout(Request $request){
      
        $request->session()->forget('session_id');
        $request->session()->forget('session_name');
        $request->session()->forget('session_tipo');
        return view('login.login');

     }


    //registro nuevo 
    public function create()
    { 
        
         //vista
         return view('logeo.register');
        
     } 

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     //registro nuevo
     public function store(Request $request){
        //formulario almacenamiento de datos
        $registros = new Registro;
        $registros->email= $request->input('email');
        $registros->password= $request->input('password');

      //guardamos datos en BD 
      $registros->save();
      //vista
      return redirect()->route("cliente");

    }
}
