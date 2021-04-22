@extends('principal')

@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-sm-auto">
            <h1>{{$aluno->nome}}</h1>
            <h2>Idade: {{$aluno->nivel}}</h2>
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



<div class="container mt-5">
<div class="row justify-content-md-center">
            <div id="scores" class="col-12">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Data</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Erros</th>
                                <th scope="col">Acertos</th>
                                <th scope="col">Premiacao</th>
                            </tr>
                        </thead>
                        <tbody id="tabela-Scores">
                        @foreach($aluno->scores as $s)
                            <tr>
                                <td>{{$s->id}}</td>
                                <td>{{$s->data}}</td>
                                <td>{{$s->nivel}}</td>
                                <td>{{$s->erros}}</td>
                                <td>{{$s->acertos}}</td>
                                <td>{{$s->premiacao}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>

            </div>

@yield('conteudoScores')

@endsection
