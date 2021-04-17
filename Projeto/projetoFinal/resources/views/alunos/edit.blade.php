@extends('principal')

@section('conteudo')
<div class="container">
<div class="row justify-content-md-center">

               <form action="{{route('alunos.update', $aluno->id)}}" method="post">
                @csrf
                @method('PUT')

                    <label>Nome:</label>
                    <input type="text" id="nome" name="nome" class="nomeInput form-control" value="{{$aluno->nome}}"/>


                   <div class="form-group col-sm-12">
                       <label class="col-4">nivel:</label>
                       <select class="form-control col-12" name="nivel" id="nivel" value>

                       @for ($i = 0; $i < 10; $i++)
                            <option value="{{$i}}" class="form-controle"
                                @if($aluno->nivel == $i)
                                    selected
                                @endif
                                >{{$i}}
                            </option>


                       @endfor
                       </select>
                   </div>

                   <label>Personagem:</label>
                    <input type="text" id="personagemInput" name="personagem" class="personagemInput form-control" value="{{$aluno->personagem}}" />


                    <label>Link da imagem do personagem:</label>
                    <input type="text" id="imgPersonagem" name="imgPersonagem" class="imgPersonagem form-control" value="{{$aluno->imgPersonagem}}"/>


                    <label>Imagem salva anteriormente:</label>
                    <div class="row justify-content-md-center">
                    <div class="col-sm-auto ">
                         <img src="{{$aluno->imgPersonagem}}" width=300 height=200></img>
                     </div>
                     </div>
                    <div class="row justify-content-md-center">
                         <div class="col-sm ">
                            <input class= "btn btn-dark col-4 float-left" type="submit" value="confirmar">
                            <a class="btn btn-default" href="{{ route('alunos.index') }}">Cancelar</a>
                </form>

                </div>
                    </div>

</div>
</div>

@endsection
