@extends('principal')

@section('conteudo')
<div class="container">
<div class="row justify-content-md-center">

               <form action="{{route('alunos.store')}}" method="post">
                @csrf

                    <label>Nome:</label>
                    <input type="text" id="nome" name="nome" class="nomeInput form-control"/>


                   <div class="form-group col-sm-12">
                       <label class="col-4">Idade:</label>
                    <input type="number" id="nivel" name="nivel" class="nomeInput form-control"/>
                   </div>


                   <label>Personagem:</label>
                    <input type="text" id="personagemInput" name="personagem" class="personagemInput form-control" value="" />


                    <label>Link da imagem do personagem:</label>
                    <input type="text" id="imgPersonagem" name="imgPersonagem" class="imgPersonagem form-control" value=""/>

                    <div class="row mt-3">
                    <input class= "btn btn-dark col-4 m-2 float-left" type="submit" value="confirmar">

                    <input class= "btn btn-dark col-4 m-2 float-right" type="reset" value="apagar">
                    </div>
                </form>

</div>
</div>

@endsection
