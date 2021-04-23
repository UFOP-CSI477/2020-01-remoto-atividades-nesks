@extends('principal')

@section('conteudo')

<div class="row ">
            <div id="areGeral" class="col-12 ">
                    <div class="row m-5 justify-content-center">
                        <div class="col-6 col-md-3 ml-md-aut">
                            <button id="btnEquipamentos" type="button" class="btn btn-primary ">Equipamentos</button>
                        </div>
                        <div class="col-6 col-md-3 ml-md-aut">
                            <button id="btnRegistros" type="button" class="btn btn-primary">Registros</button>
                        </div>
                    </div>
        <div class="container">
                    <table id="registros" class="table table-dark" hidden>
                        <thead>
                            <tr>
                                <th scope="col">Data Limite</th>
                                <th scope="col">Equipamento</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody id="tabela-equipamentos">
                            @foreach($registros as $r)
                            <tr>
                                <td>{{$r->datalimite}}</td>
                                <td>{{$r->equipamento->nome}}</td>
                                <td>{{$r->user->name}}</td>
                                <td>{{$r->tipo}}</td>
                                <td>{{$r->descricao}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table id="equipamentos" class="table table-dark" hidden>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                            </tr>
                        </thead>
                        <tbody id="tabela-equipamentos">
                            @foreach($equipamentos as $e)
                            <tr>
                                <td>{{$e->id}}</td>
                                <td>{{$e->nome}}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>
            </div>
            <script>
document.getElementById("btnEquipamentos")
        .addEventListener("click", function() {
  document.getElementById("equipamentos").hidden = true;
  document.getElementById("registros").hidden = false;
}, false);

document.getElementById("btnRegistros")
        .addEventListener("click", function() {
  document.getElementById("registros").hidden = true;
  document.getElementById("equipamentos").hidden = false;
}, false);



</script>


@endsection



