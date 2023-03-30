<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\MaquinaController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//-----------LOGIN-and Register------------//
Route::resource('login',RegistroController::class);
//Route::name('validar')->get('validar',[RegistroController::class,'validar']);
//Route::name('logout')->get('logout',[RegistroController::class,'logout']);
//Route::resource('registro',RegistroController::class);
//------------vistas generales ------------//
Route::resource('cliente',ClientesController::class);
Route::name('cliente')->get('cliente',[ClientesController::class,'index']);
Route::resource('cuidador',CuidadorController::class);
Route::resource('medicamento',MedicamentoController::class);
Route::resource('tratamiento',TratamientoController::class);
Route::resource('maquinas',MaquinaController::class);
