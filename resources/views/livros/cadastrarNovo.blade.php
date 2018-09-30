@extends ('layouts.app') 
@section ('content')
<title>Cadastro Novo Livro</title>

<style>
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
</style>

<body class="text-center">
  <form class="form-signin" method="POST" action="/livros">
    {{ csrf_field() }}
    <h1 class="h3 mb-3 font-weight-normal">cadastro Novo Livro</h1>

    <input type="nome" id="inputNome" name="nome" class="form-control" placeholder="Nome do Livro" required autofocus>

    <input type="autor" id="inputAutor" name="autor" class="form-control" placeholder="Autor" required>

    <input type="number" id="inputAno" name="ano" class="form-control" placeholder="Ano" required>

    <select id="inputStatus" name="status" class="form-control" required>
      <option value="" disabled selected>Status</option>
      <option value="Disponivel">Disponivel</option>
      <option value="Emprestado">Emprestado</option>
    <option value="Reservado">Reservado</option>
    </select>

    <select id="inputNivel" name="nivel" class="form-control" required>
      <option value="" disabled selected>Nivel</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
  </form>
</body>

@endsection