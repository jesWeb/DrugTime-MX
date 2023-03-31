<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClientesController extends Controller
{
    //
    public function index()
    {       
        //cosulta DB eloquent laravel
        $clientes = cliente::all();
         //vista
         return view('cliente.index',compact('clientes'));
        
     }  

     public function create()
     { 
         
          //vista
          return view('cliente.info',compact('cliente'));
         
      } 


    //registro nuevo
    
    public function store(Request $request){
        //formulario almacenamiento de datos
        $clientes = new Cliente;
        $clientes->email= $request->input('email');
        $clientes->password= $request->input('password');

      //guardamos datos en BD 
      $clientes->save();
    }

    public function show($id){
      $Mostrarc = cliente::find($id);
      return view('cliente.show',compact('MostrarCliente'));
    }

}
