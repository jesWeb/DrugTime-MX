<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\Auth\AuthController;



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
Route::prefix('auth')->group(function () {
    Route::get('/user/signup', [AuthController::class, 'create'])->name('registerAuth');
    Route::get('/user/login', [AuthController::class, 'index'])->name('loginAuth');
    Route::get('/user/activacion', [AuthController::class, 'activacion'])->name('activacion');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
});

Route::prefix('cliente')->group(function () {
    Route::get('/info', [ClientesController::class, 'info'])->name('infoCliente');
    Route::get('/user/login', [AuthController::class, 'index'])->name('loginAuth');
    Route::get('/user/activacion', [AuthController::class, 'activacion'])->name('activacion');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
});

Route::prefix('peticiones')->group(function () {
    //Cliente
    Route::post('/user/resgister', [AuthController::class, 'registerCreate'])->name('registerCreate');
    Route::post('/user/saveSettingsC', [ClientesController::class, 'saveSettingsC'])->name('saveSettingsC');
});








//------------vistas generales ------------//
Route::resource('cliente',ClientesController::class);
//Route::name('cliente')->get('cliente',[ClientesController::class,'info']);
//Route::name('info')->get('info',[RegistroController::class,'info']);



Route::resource('cuidador',CuidadorController::class);
Route::resource('medicamento',MedicamentoController::class);
Route::resource('tratamiento',TratamientoController::class);
Route::resource('maquinas',MaquinaController::class);
