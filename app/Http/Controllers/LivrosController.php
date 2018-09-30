<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Livro;

class LivrosController extends Controller{
  
  public function __construct()
    {
      //$this->middleware('auth', 'except' => 'lista');  
      $this->middleware('auth');
    }
  
  // CREATE
  public function cadastrarNovo(){
    return view('livros.cadastrarNovo');
  }
  
  public function BDcadastrarNovo(){
    Livro::create([
      'nome' => request('nome'),
      'autor' => request('autor'),
      'status' => request('status'),
      'ano' => request('ano'),
      'nivel' => request('nivel')      
    ]);
     return redirect('/livros/lista');
  }
  
  
  // READ
  public function lista(){
    $livros = Livro::all();
    return view('livros.lista',compact('livros'));
  }
  
  
  // UPDATE
  public function editar(Livro $livro){
    return view('livros.editar',compact('livro'));
  }
  
  public function BDeditar(Livro $livro){
    $livro->update([
      'nome' => request('nome'),
      'autor' => request('autor'),
      'status' => request('status'),
      'ano' => request('ano'),
      'nivel' => request('nivel')
    ]);
    return redirect('/livros/lista');
  }
  
  // DELETE
  public function deletar(Livro $livro){
    return view('livros.deletar',compact('livro'));
  }
  
  public function BDdeletar(Livro $livro){
    $livro->delete();
    return redirect('/livros/lista');
  }
  
  
  
  
  /*
  //DEPOIS
  ///////////////////////
  //ANTES
  public function index(){
    $livros = Livro::all();
    $reservados = Livro::reservados();
    $reservadosID = Livro::reservadosID();
    return view('testes.listaLivrosTeste', compact('livros','reservados','reservadosID'));
  }

  public function livroEspecifico(Livro $livro){
    return view('testes.livroEspecificoTeste', compact('livro'));
  }
  
  public function cadastroNovoLivro(){
    return view('testes.cadastroNovoLivro');
  }
   
  public function criar(){
    
    Livro::create([
      'nome' => request('nome'),
      'autor' => request('autor'),
      'status' => request('status'),
      'ano' => request('ano'),
      'nivel' => request('nivel')      
    ]);
    return redirect('/listaLivrosTeste');
  }*/
}
