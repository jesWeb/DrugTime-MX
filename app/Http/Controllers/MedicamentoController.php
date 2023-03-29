<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    //
    public function index()
    {   
          //cosulta DB eloquent laravel
          $medicamentos = Medicamento::all();
         //vista
         return view('medicamentos.index',compact('medicamentos'));
        
     } 

     public function create()
     {
         //vista de formulario
         return view('medicamentos.add');
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
        $Drogas->nombre=$request->input('nombre');
        $Drogas->Descripcion=$request->input('descripcion');
        $Drogas->Tipo=$request->input('tipo');
         //guardamos datos en BD 
        $Drogas->save();
     }




}
