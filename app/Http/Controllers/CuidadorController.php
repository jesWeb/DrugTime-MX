<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuidadorController extends Controller
{
    //
    public function index()
    {
         //vista
         return view('cuidador.index');
        
     } 

     public function create()
   {
       //vista de formulario
       return view('cuidador.add');
   }
}
