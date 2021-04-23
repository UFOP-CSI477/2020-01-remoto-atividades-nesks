<?php

namespace App\Http\Controllers;

use App\Models\Equipamentos;
use Illuminate\Http\Request;

class EquipamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {

       $equipamentos = Equipamentos::orderBy('nome')->get();
       return view('equipamentos.index', ['equipamentos' => $equipamentos]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
       return view('equipamentos.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       Equipamentos::create($request->all());
       session()->flash('mensagem', "Cadastrado com sucesso!");
       return redirect()->route('principal');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Equipamentos  $Equipamento
    * @return \Illuminate\Http\Response
    */
   public function show(Equipamentos $Equipamento)
   {

       return view('equipamentos.show', ['Equipamento' => $Equipamento]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Equipamentos  $Equipamento
    * @return \Illuminate\Http\Response
    */
   public function edit(Equipamentos $Equipamento)
   {
       //
       return view('equipamentos.edit', ['Equipamento' => $Equipamento]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Equipamento  $Equipamento
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Equipamentos $Equipamento)
   {
       //
       $Equipamento->fill($request->all());
       $Equipamento->save();

       session()->flash("mensagem","Editado com sucesso!");
       return redirect()->route('equipamentos.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Equipamentos  $Equipamento
    * @return \Illuminate\Http\Response
    */
   public function destroy(Equipamentos $Equipamento)
   {
       $Equipamento->delete();
       session()->flash('mensagem', "Excluido com sucesso!");
       return redirect()->route('principal');
   }
}
