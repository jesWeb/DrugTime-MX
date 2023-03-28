<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    public function index()
    {       
        //cosulta DB eloquent laravel
        //$cliente = clientes::all();
         //vista
         return view('cliente.index');
        
     }  
}
