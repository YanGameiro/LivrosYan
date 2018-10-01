@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Seja Bem Vindo</div>

                <div class="panel-body">
                    <p>Este sistema está em desenvolvimento. <a href="https://github.com/YanGameiro/LivrosYan" target="_blank"> Ver no GitHub </a></p>
                    <p>Funcionalidades Implementadas:</p>
                    <ul>
                        <li>Cadastro, Listagem, Edição e Exclusão de Livros;</li>
                        <li>Cadastro, Listagem, Edição e Exclusão de Usuarios;</li>
                        <li>Realização de Empréstimos de acordo com o nível do usuário e do livro;</li>
                    </ul>
                    <p>Funcionalidades Futuras: </p>
                    <ul>
                        <li>Lidar com a possibilidade de se existir mais de um exemplar de um mesmo livro; </li>
                        <li>Lidar melhor com dois tipos de usuários que podem estar logados, um Administrador que pode fazer tudo, e um Usuário normal que pode apenas fazer RESERVAS;</li>
                        <li>Trabalhar com horários e datas, de modo a possibilitar que uma reserva expire, seja renovada e que um usuário saiba quando um livro desejado estará disponível;</li>
                        <li>Lidar Melhor com as validações de dados, exemplo: Impedir o cadastro de um livro com o ano de 2040 e validar o documento de identidade do usuário;</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
