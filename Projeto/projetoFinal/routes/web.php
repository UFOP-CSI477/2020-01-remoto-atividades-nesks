<?php

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

use App\Models\Aluno;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ScoreController;

Route::get('/', function () {
    return view('principal');
})->name('principal');


Route::resource('alunos', AlunoController::class);
Route::resource('scores', ScoreController::class);

Route::get('/game', function () {
    return view('jogo.fase1');
})->name('fase1');


/*
Route::get('/alunos', function(){
    $alunos = Aluno::all();

    return view('listaAlunos', ['dados' => $alunos]);
});


Route::get("/alunos/{id}", function($id){

    $aluno = Aluno::findOrFail($id);
    return view('listaAlunos',['dados'=>$aluno]);

});

*/
