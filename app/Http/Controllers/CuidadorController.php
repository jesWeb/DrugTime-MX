<?php

namespace App\Http\Controllers;

use App\Models\Cuidador;
use Illuminate\Http\Request;

class CuidadorController extends Controller
{
    //
    public function index()
    {   
        //cosulta DB eloquent laravel
        $cuidadores = Cuidador::all();
         //vista
         return view('cuidador.index',compact('cuidadores'));
        
     } 

  
  public function create()
   {
       //vista de formulario
       return view('cuidador.add');
   }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   //registro de cuidadoe
   
   public function store(Request $request){
    //formulario almacenamiento de datos
    $trabajadores = new Cuidador;
    $trabajadores -> nombre =$request->input('nombre');
    $trabajadores -> fechaN =$request->input('fechaN');
    $trabajadores -> sexo =$request->input('sexo');
    $trabajadores -> parentesco =$request->input('parentesco');
    $trabajadores -> matricula =$request->input('matricula');
    $trabajadores -> Telefono =$request->input('Telefono');
    $trabajadores -> lugarTrabajo =$request->input('lugarTrabajo');
    $trabajadores -> email =$request->input('email');
    //guardamos datos en BD 
     $trabajadores->save();
     //vista
     return redirect('cuidador');
}




}
