<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Principal</title>
</head>
<body>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="{{route('principal')}}" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="{{route('alunos.index')}}" class="nav-link px-2 link-dark">alunos</a></li>
      <li><a href="{{route('alunos.create')}}" class="nav-link px-2 link-dark">Cadastrar aluno</a></li>
      <li><a href="{{route('scores.index')}}" class="nav-link px-2 link-dark">Scores</a></li>
      <li><a href="{{route('fase1')}}" class="nav-link px-2 link-dark">jogar</a></li>
      <!--
      <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      -->
    </ul>

    <div class="col-md-3">
      <button type="button" class="btn btn-outline-primary me-2">Login</button>
      <button type="button" class="btn btn-primary">Sign-up</button>
    </div>
  </header>

        @if(session('mensagem'))

            <div class="alert alert-success">
            {{session('mensagem')}}
            </div>

        @endif

        @yield('conteudo')
</body>
</html>
