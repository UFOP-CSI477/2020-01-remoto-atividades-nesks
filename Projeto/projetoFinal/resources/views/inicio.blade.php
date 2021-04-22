@extends('principal')

@section('conteudo')
<link rel="stylesheet" href="{{url(mix('/jogo/css/styles.css'))}}" class="href">


<div class="container">
<div class="row justify-content-center align-items-center">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1 col-4">

                    <div class="row justify-content-center my-auto mb-5">

                                <img src="https://s3.static.brasilescola.uol.com.br/be/2020/02/inclusao-social.jpg" alt="" class="src">

                    </div>
                                    <div class="bottom text-center mb-5">

      <a href="{{route('configuracao')}}" class="nav-link px-2 link-dark"><button class="btn btn-success">CONFIGURAR DESAFIO</button></a>
                                    </div>

            </div>
            <div class="card card2 col-8 ">
                <div class="my-auto mx-md-5 px-md-5 right">
                <h3 class="text-dark">Lorem Ipsum </h3> <small class="text-dark">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</small>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
