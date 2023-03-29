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
         $tratamientos = Tratamiento::all();
          //vista
          return view('tratamientos.index',compact('tratamientos'));
         
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
        $Tratamientos = new Tratamiento;
        $Tratamientos->nombre=$request->input('nombre');
        $Tratamientos->dosis=$request->input('dosis');
        $Tratamientos->horario=$request->input('horario');
        $Tratamientos->dias=$request->input('dias');
         //guardamos datos en BD 
        $Tratamientos->save();
        

     }
}
