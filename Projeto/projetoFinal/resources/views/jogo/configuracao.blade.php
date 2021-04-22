@extends('principal')

@section('conteudo')

<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1 col-4">
                <form  action="{{route('scores.store')}}" method="POST">
                @csrf
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <h3 class="mb-5 text-center heading">Configurações</h3>

                                        <label class="form-control-label text-muted">Aluno</label>
                                        <select class="form-control col-12" name="aluno_id" id="aluno_id">
                                                @foreach($alunos as $a)
                                                        <option value="{{$a->id}}" class="form-control">{{$a->nome}}</option>
                                                @endforeach
                                        </select>
                                        <label class="form-control-label text-muted">Nivel</label>
                                        <select class="form-control col-12" name="nivel" id="nivel">
                                                @for($i = 1; $i < 4; $i++)
                                                        <option value="{{$i}}" class="form-control">{{$i}}</option>
                                                @endfor
                                        </select>
                                        <label class="form-control-label text-muted">Premiação(código do video do youtube)</label>
                                        <input type="text" id="premiacao" name="premiacao" class="form-control">
                                        <input class="data form-control" type="date" value="2021-01-01" id="data" name="data" hidden></input>
                                        <input type="text"  id="erros" name="erros" value="0" hidden></input>
                                         <input type="text"  id="acertos" name="acertos" value="0" hidden></input>

                        </div>
                    </div>
                                    <div class="bottom text-center mb-5">
                                        <button class="btn btn-dark">Iniciar</button></p>
                                    </div>
                </form>
            </div>
            <div class="card card2 col-8">
                <div class="my-auto mx-md-5 px-md-5 right">
                <h3 class="text-dark">Guia de niveis:</h3> <small class="text-dark">
                Nivel 1:      Digitar as letras do proprio nome, para se familiarizar com o teclado e as letras do seu nome.<br>
                Nivel 2:      Digitar os números de 1 até 9 para se familiarizar com o teclado e números. <br>
                Nivel 3:      Arraste o personagem até sua casa, para se familiarizar com o ponteiro do mouse. <br>

                      <br>  Ao finalizar o desafio o video na qual foi adicionado o código como premiação irá iniciar.

                </small>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
