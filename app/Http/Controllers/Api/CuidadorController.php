<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cuidador;
use Illuminate\Http\Request;

class CuidadorController extends Controller
{
    //vista principal

    public function index()
    {
        //cosulta DB eloquent laravel
        $cuidadores = Cuidador::all();
         //vista
         return response()->json(['cuidadoApi',$cuidadores],200);

     }

     //registro
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
     //eliminar
     /**
    *Elimina el recurso especificado del almacenamiento.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    //eliminacion
    public function destroy($id)
    {
        //ELIMINAR
        $cuidado = Cuidador::findOrFail($id);
        $cuidado ->delete();
        return "El resgistro se elimino con exito";
    }


}
