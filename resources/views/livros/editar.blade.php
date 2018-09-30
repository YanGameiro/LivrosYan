@extends ('layouts.app') 
@section ('content')
<title>Edição de livro</title>

<style>
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
</style>

<body class="text-center">
  <form class="form-signin" method="POST" action="/livros/{{$livro->id}}/BDeditar">
    {{ csrf_field() }}



    <input type="nome" id="inputNome" name="nome" class="form-control" value="{{$livro->nome}}" required autofocus>

    <input type="autor" id="inputAutor" name="autor" class="form-control" value="{{$livro->autor}}" required>

    <input type="number" id="inputAno" name="ano" class="form-control" value="{{$livro->ano}}" required>

    <select id="inputStatus" name="status" class="form-control" required>
      <option @if ($livro->status == 'Disponivel') selected @endif value="Disponivel">Disponivel</option>
      <option @if ($livro->status == 'Emprestado') selected @endif value="Emprestado">Emprestado</option>
      <option @if ($livro->status == 'Reservado') selected @endif value="Reservado">Reservado</option>
    </select>

    <select id="inputNivel" name="nivel" class="form-control" required>
      <option @if ($livro->nivel == 1) selected @endif value="1">1</option>
      <option @if ($livro->nivel == 2) selected @endif value="2">2</option>
      <option @if ($livro->nivel == 3) selected @endif value="3">3</option>
      <option @if ($livro->nivel == 4) selected @endif value="4">4</option>
      <option @if ($livro->nivel == 5) selected @endif value="5">5</option>
    </select>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Editar</button>
  </form>
</body>

@endsection