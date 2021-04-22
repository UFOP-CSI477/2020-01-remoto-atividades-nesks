<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Aluno;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       # dd($aluno);
        $score = Score::orderBy('id')->get();

        return view('scores.index', ['score' =>$score]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           # dd($request->all());
        $score = Score::create($request->all());
        session()->flash('mensagem', "Jogo Iniciado!");

        if($score->nivel==1){
         return redirect()->route('fase1',[$score->id]);
        }else if($score->nivel==2){
            return redirect()->route('fase2',[$score->id]);
        }else if($score->nivel==3){
            return redirect()->route('fase3',[$score->id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {

        $score->fill($request->all());
        $score->save();
        session()->flash('mensagem', "Jogo finalizado!");
        return redirect()->route('premiacao',[$score->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
