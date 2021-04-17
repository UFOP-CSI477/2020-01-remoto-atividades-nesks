@extends('principal')

@section('conteudo')
<div class="container">
<div class="row justify-content-md-center">

               <form action="{{route('alunos.store')}}" method="post">
                @csrf

                    <label>Nome:</label>
                    <input type="text" id="nome" name="nome" class="nomeInput form-control"/>


                   <div class="form-group col-sm-12">
                       <label class="col-4">nivel:</label>
                       <select class="form-control col-12" name="nivel" id="nivel">
                           <option value="">Selecione:</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                       </select>
                   </div>

                   <label>Personagem:</label>
                    <input type="text" id="personagemInput" name="personagem" class="personagemInput form-control"/>

                    <label>Link da imagem do personagem:</label>
                    <input type="text" id="imgPersonagem" name="imgPersonagem" class="imgPersonagem form-control"/>

                    <input class= "btn btn-dark col-4 float-left" type="submit" value="confirmar">

                    <input class= "btn btn-dark col-4 float-left" type="reset" value="apagar">

                </form>

</div>
</div>

@endsection
