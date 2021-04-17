@extends('principal')

@section('conteudo')

<div class="row justify-content-md-center">
            <div id="alunos" class="col-12">
                    <h2>Alunos</h2>

                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Personagem</th>
                                <th scope="col">Imagem</th>
                            </tr>
                        </thead>
                        <tbody id="tabela-Alunos">
                            @foreach($alunos as $e)
                            <tr>
                                <td>{{$e->id}}</td>
                                <td><a href="{{route('alunos.show', $e->id)}}">{{$e->nome}}</td>
                                <td>{{$e->nivel}}</td>
                                <td>{{$e->personagem}}</td>
                                <td><img src="{{$e->imgPersonagem}}" width=60 height=40></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>


@endsection
