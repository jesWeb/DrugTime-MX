<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Tratamiento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    //
    public function index()
    {   
          //cosulta DB eloquent laravel
          $medicamentos = Medicamento::all('nombre','tipo','descripcion');
         //vista
         return view('medicamentos.index',compact('medicamentos'));
        
     } 

     public function create()
     {
         //vista de formulario
         $recomendacion = Tratamiento::all('id','nombre');
         return view('medicamentos.add',compact('recomendacion'));
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
        $Drogas = new Medicamento;
        $Drogas->nombre = $request->input('nombre');
        $Drogas->descripcion = $request->input('descripcion');
        $Drogas->tipo=$request->input('tipo');

        $Drogas->tratamientos_id=$request->input('tratamientos_id');
         //guardamos datos en BD 
        $Drogas->save();
        
     }




}
