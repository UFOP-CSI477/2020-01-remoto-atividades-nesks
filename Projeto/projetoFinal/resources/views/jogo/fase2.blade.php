@extends('principal')

@section('conteudo')


<link rel="stylesheet" href="{{url(mix('/jogo/css/styles.css'))}}" class="href">


<div class="container">
  <div class="row justify-content-center align-items-center">
    <h1 id="letra" class="text-center display-1"></h1>
  </div>
</div>


<form id="formulario" action="{{route('scores.update',$score->id)}}" method="post" hidden >
                @csrf
                @method('PUT')
                    <input class="data form-control" type="date" value="2021-01-01" id="data" name="data"></input>
                    <input type="text"  id="id" name="id" value="{{$score->id}}"></input>
                    <input type="text"  id="nivel" name="nivel" value="{{$score->nivel}}"></input>
                    <input type="text"  id="erros" name="erros" value="2"></input>
                    <input type="text"  id="acertos" name="acertos" value="3"></input>
                    <input type="text"  id="aluno_id" name="aluno_id" value="{{$score->aluno_id}}"></input>
                    <input type="text" id="premiacao" name="premiacao" value="https://www.youtube.com/embed/{{$score->premiacao}}?autoplay=1"></input>
</form>


<script>
var cont= 0;
var errosTotais = 0;
var acertosTotais = 0;
var index= 0;
var letra = [0,1,2,3,4,5,6,7,8,9];

function tecla(){
    if(index<letra.length){
        if(String.fromCharCode(event.keyCode)==letra[index]){
            errosTotais = errosTotais + cont;
            acertosTotais++;
            cont=0;
            index++;
            if(index!=letra.length){
                if(letra[index]==" "){
                    index++;
                }
            teste();
            }else{
              var data = new Date(),
             dia  = data.getDate().toString().padStart(2, '0'),
             mes  = (data.getMonth()+1).toString().padStart(2, '0'), //+1 pois no getMonth Janeiro começa com zero.
             ano  = data.getFullYear();
                var dataCompleta =ano+'-'+mes+'-'+dia;
                document.getElementById("data").value=dataCompleta;
                document.getElementById("erros").value=errosTotais;
                document.getElementById("acertos").value=acertosTotais;
                document.getElementById("formulario").submit();
            }
        }else{
        cont++;
        }
    }
}

function teste(){
    document.getElementById("letra").innerHTML=letra[index];
}

teste();
document.body.onkeypress = tecla;



</script>


@endsection
