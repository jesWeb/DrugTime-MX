<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    //

    public function index()
    {   
         //cosulta DB eloquent laravel
         $maquinas = Maquina::all();
         //vista
         return view('maquinas.index',compact('maquinas'));
        
     } 

     public function create()
     {
         //vista de formulario
         return view('maquinas.add');
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
        $maquina = new Maquina;
        $maquina->nombre= $request->input('nombre');
        $maquina->Modelo= $request->input('Modelo');
        $maquina->Humedad= $request->input('Humedad');
      //guardamos datos en BD 
      $maquina->save();
      //vista
     }
}
