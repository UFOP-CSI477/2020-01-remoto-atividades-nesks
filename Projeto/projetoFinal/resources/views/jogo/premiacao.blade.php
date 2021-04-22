@extends('principal')

@section('conteudo')


<link rel="stylesheet" href="{{url(mix('/jogo/css/styles.css'))}}" class="href">

<div class="container">
  <div class="row justify-content-center align-items-center">
  <iframe class="embed-responsive-item" src="{{$score->premiacao}}?autoplay=1" frameborder="0" allow='autoplay' allowfullscreen style="width: 100%; height: 100%;" allowfullscreen></iframe>
</div>
</div>

@endsection
