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
use App\Models\Score;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ScoreController;

Route::get('/', function () {
    return view('inicio');
})->name('principal');


Route::resource('alunos', AlunoController::class);
Route::resource('scores', ScoreController::class);

Route::get('/fase1/{id}', function ($id) {
    $score = Score::findOrFail($id);
    return view('jogo.fase1', ['score'=>$score]);
})->name('fase1');

Route::get('/fase2/{id}', function ($id) {
    $score = Score::findOrFail($id);
    return view('jogo.fase2', ['score'=>$score]);
})->name('fase2');

Route::get('/fase3/{id}', function ($id) {
    $score = Score::findOrFail($id);
    return view('jogo.fase3', ['score'=>$score]);
})->name('fase3');
Route::get('/premiacao/{id}', function ($id) {
    $score = Score::findOrFail($id);
    return view('jogo.premiacao', ['score' => $score]);
})->name('premiacao');


Route::get('/configuracao', function(){

    $alunos = Aluno::all();
    return view('jogo.configuracao', ['alunos'=>$alunos]);
})->name('configuracao');
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
