<?php

use Illuminate\Support\Facades\Input;

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index');

    //   LIVROS
    //CREATE
    Route::get('/livros/cadastrarNovo','LivrosController@cadastrarNovo');
    Route::post('/livros','LivrosController@BDcadastrarNovo');

    //READ
    Route::get('/livros/lista','LivrosController@lista');

    //UPDATE
    Route::get('/livros/{livro}/editar','LivrosController@editar');
    Route::post('/livros/{livro}/BDeditar','LivrosController@BDeditar');

    //DELETE
    Route::get('/livros/{livro}/deletar','LivrosController@deletar');
    Route::get('/livros/{livro}/BDdeletar','LivrosController@BDdeletar');


    //   USUARIOS
    //CREATE
    Route::get('/usuarios/cadastrarNovo','UsuariosController@cadastrarNovo');
    Route::post('/usuarios','UsuariosController@BDcadastrarNovo');

    //READ
    Route::get('/usuarios/lista','UsuariosController@lista');

    //UPDATE
    Route::get('/usuarios/{usuario}/editar','UsuariosController@editar');
    Route::post('/usuarios/{usuario}/BDeditar','UsuariosController@BDeditar');

    //DELETE
    Route::get('/usuarios/{usuario}/deletar','UsuariosController@deletar');
    Route::get('/usuarios/{usuario}/BDdeletar','UsuariosController@BDdeletar');

    //CONTROLE DE ACESSO
    Route::get('/usuarios/controleAcesso', 'UsuariosController@controleAcesso');
    Route::get('/usuarios/{usuario}/configurarAcesso', 'UsuariosController@configurarAcesso');
    Route::post('/usuarios/{usuario}/BDconfigurarAcesso','UsuariosController@BDconfigurarAcesso');

    // EMPRESTIMO
    // CREATE
    Route::get('/emprestimos/cadastrarNovo','EmprestimosController@cadastrarNovo');
    Route::post('/emprestimos','EmprestimosController@BDcadastrarNovo');
    Route::get('/ajax-encontra/{usuario}','EmprestimosController@encontraLivros');

    //READ
    Route::get('/emprestimos/lista','EmprestimosController@lista');

    //UPDATE
    Route::get('/emprestimos/{emprestimo}/arquivar', 'EmprestimosController@arquivar');
    Route::get('/emprestimos/{emprestimo}/BDarquivar', 'EmprestimosController@BDarquivar');

    //DELETE
    Route::get('/emprestimos/{emprestimo}/deletar','EmprestimosController@deletar');
    Route::get('/emprestimos/{emprestimo}/BDdeletar','EmprestimosController@BDdeletar');

    Route::get('/normal',function(){
        if(Auth::user()->super == 0){
            return view('livros.cadastrarNovo');
        }else{
            return view('usuarios.cadastrarNovo');
        }
    });

});
