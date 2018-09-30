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
  <form class="form-signin" method="POST" action="/usuarios">
    {{ csrf_field() }}
    <h1 class="h3 mb-3 font-weight-normal">Cadastro Novo Usuario</h1>

    <input type="nome" id="inputNome" name="nome" class="form-control" placeholder="Nome do usuario" required autofocus>

    <input type="login" id="inputLogin" name="login" class="form-control" placeholder="Login" required>

    <input type="password" id="inputSenha" name="senha" class="form-control" placeholder="Senha" required>

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