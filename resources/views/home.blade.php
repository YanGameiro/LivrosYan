@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                  <ul>
                    <a href="/livros/lista"><li> Listar Livros</li> </a>
                    <a href="/livros/cadastrarNovo"><li> Cadastrar Novo Livro</li></a>
                  </ul>
                  <ul>
                    <a href="/usuarios/lista"><li> Listar Usuarios</li> </a>
                    <a href="/usuarios/cadastrarNovo"><li> Cadastrar Usuario</li></a>
                    <a href="/usuarios/controleAcesso"><li> Controle de Acesso</li></a>
                  </ul>
                  <ul>
                    <a href="/emprestimos/lista"><li> Listar empréstimos</li> </a>
                    <a href="/emprestimos/cadastrarNovo"><li> Cadastrar empréstimo</li></a>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
