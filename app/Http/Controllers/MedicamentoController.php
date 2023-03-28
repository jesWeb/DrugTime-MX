<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    //
    public function index()
    {
         //vista
         return view('medicamentos.index');
        
     } 

     public function create()
     {
         //vista de formulario
         return view('medicamentos.add');
     }
}
