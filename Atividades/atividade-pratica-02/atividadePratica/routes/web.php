<?php


use App\Models\Equipamentos;
use App\Models\Registros;

use Illuminate\Support\Facades\Route;

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
    return view('principal');
})->name('principal');



Route::get('/areaGeral', function () {
    $equipamentos = Equipamentos::orderBy('nome')->get();
    $registros = Registros::all();
    return view('areaGeral', ['equipamentos'=>$equipamentos, 'registros'=>$registros]);
})->name('areaGeral');


Route::resource('equipamentos', EquipamentosController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');