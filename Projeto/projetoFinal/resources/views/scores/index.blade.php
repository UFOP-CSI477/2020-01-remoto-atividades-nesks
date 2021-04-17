@extends('principal')

@section('conteudo')


<div class="container">
<div class="row justify-content-md-center">
            <div id="scores" class="col-12">
                    <h2>Alunos</h2>

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
                        @foreach($score as $s)
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

@endsection
