@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Seja Bem Vindo</div>

                <div class="panel-body">
                    <p>Este sistema está em desenvolvimento. <a href="https://github.com/YanGameiro/Mini-CRM-Yan" target="_blank"> Ver no GitHub</p>
                    <p>Funcionalidades Implementadas:</p>
                    <ul>
                        <li>Cadastro, Listagem, Edição e Exclusão de Livros</li>
                        <li>Cadastro, Listagem, Edição e Exclusão de Usuarios</li>
                        <li>Realização de Empréstimos de acordo com o nível do usuário e do livro</li>
                    </ul>
                    <p>Funcionalidades Futuras: </p>
                    <ul>
                        <li>Lidar com a possibilidade de se existir mais de um exemplar de um mesmo livro </li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
