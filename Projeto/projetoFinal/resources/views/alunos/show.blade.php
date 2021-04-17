@extends('principal')

@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-sm-auto">
            <h1>{{$aluno->nome}}</h1>
            <h2>Nivel atual: {{$aluno->nivel}}</h2>
            <h2>Personagem escolhido: {{$aluno->personagem}}</h2>
            <h2>Imagem do personagem:</h2>
        </div>
        <div class="col-sm">
            <img src="{{$aluno->imgPersonagem}}" width=300 height=200></img>
        </div>
    </div>
    <div class="row">
        <form action="{{route('alunos.destroy', $aluno->id)}}" method="post" class="col-sm-auto" onsubmit="return confirm('Deseja realmente excluir {{$aluno->nome}} ?')">
        @csrf
        @method('DELETE')

            <button class="submit btn btn-danger">excluir</button>
        </form>


        <a href="{{route('alunos.edit', $aluno->id)}}" class="col-sm-auto">
            <button class="submit btn btn-dark">editar</button>
        </a>



    </div>
</div>

@yield('conteudoScores')

@endsection
