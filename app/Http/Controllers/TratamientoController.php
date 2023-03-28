<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    //
     //
     public function index()
     {
          //vista
          return view('tratamientos.index');
         
      } 
 
      public function create()
      {
          //vista de formulario
          return view('tratamientos.add');
      }
}
