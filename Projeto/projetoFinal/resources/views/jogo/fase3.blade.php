@extends('principal')

@section('conteudo')


<link rel="stylesheet" href="{{url(mix('/jogo/css/styles.css'))}}" class="href">


<div class="container">
<div id="dropzone"><img src="https://st2.depositphotos.com/2435397/8050/i/600/depositphotos_80500414-stock-photo-old-cartoon-house.jpg" width=300 height=200></img></div>

  <div class="row justify-content-center align-items-center">
  <div id="drag_me"><img src="{{$score->aluno->imgPersonagem}}" width=150 height=100></img></div>
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

var dragMe = document.getElementById("drag_me"),
  /* o x inicial do drag*/
  dragOfX = 0,
  /* o y inicial do drag */
  dragOfY = 0;

/* ao segurar o elemento */
function dragStart(e) {
    /* define o x inicial do drag */
    dragOfX = e.pageX - dragMe.offsetLeft;
    /* define o y inicial do drag */
    dragOfY = e.pageY - dragMe.offsetTop;

    acertosTotais++;
    /* adiciona os eventos */
    addEventListener("mousemove", dragMove);
    addEventListener("mouseup", dragEnd);
}

/* ao ser arrastado */
function dragMove(e) {
    /* atualiza a posição do elemento */
    dragMe.style.left = (e.pageX - dragOfX) + 'px';
    dragMe.style.top = (e.pageY - dragOfY) + 'px';
}

/* ao terminar o drag */
function dragEnd() {
    /* remove os eventos */

    errosTotais++;
    removeEventListener("mousemove", dragMove);
    removeEventListener("mouseup", dragEnd);

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

/* adiciona o evento que começa o drag */
dragMe.addEventListener("mousedown", dragStart);



</script>


@endsection
