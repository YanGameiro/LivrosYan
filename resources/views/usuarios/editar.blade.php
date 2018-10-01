@extends ('layouts.app') 
@section ('content')
<title>Cadastro Novo Usuario</title>

<style>
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
</style>

<body class="text-center">
  <form class="form-signin" method="POST" action="/usuarios/{{$usuario->id}}/BDeditar">
    {{ csrf_field() }}
    <h1 class="h3 mb-3 font-weight-normal">Editar Usuario</h1>

    <input type="nome" id="inputNome" name="nome" class="form-control" value="{{$usuario->nome}}" required autofocus>

    <input type="documento" id="inputDocumento" name="documento" class="form-control" value="{{$usuario->documento}}" required>

    <select id="inputNivel" name="nivel" class="form-control" required>
      <option @if ($usuario->nivel == 1) selected @endif value="1">1</option>
      <option @if ($usuario->nivel == 2) selected @endif value="2">2</option>
      <option @if ($usuario->nivel == 3) selected @endif value="3">3</option>
      <option @if ($usuario->nivel == 4) selected @endif value="4">4</option>
      <option @if ($usuario->nivel == 5) selected @endif value="5">5</option>
    </select>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Editar</button>
  </form>
</body>

@endsection