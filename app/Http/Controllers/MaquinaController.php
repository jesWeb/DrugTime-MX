<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    //

    public function index()
    {
         //vista
         return view('maquinas.index');
        
     } 

     public function create()
     {
         //vista de formulario
         return view('maquinas.add');
     }
}
