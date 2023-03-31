<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    //
     //
     public function index()
     {  
              //cosulta DB eloquent laravel
         $recomendacion = Tratamiento::all();
          //vista
          return view('tratamientos.index',compact('recomendacion'));
         
      } 
 
      public function create()
      {
          //vista de formulario
          return view('tratamientos.add');
      }
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        //registro de medicamentos
     public function store(Request $request){
        //formulario almacenamiento de datos
        $trato = new Tratamiento;
        $trato->nombre=$request->input('nombre');
        $trato->dosis=$request->input('dosis');
        $trato->horario=$request->input('horario');
        $trato->dias=$request->input('dias');
         //guardamos datos en BD 
        $trato->save();
    
     }
}
