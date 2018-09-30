<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Emprestimo;
use App\Livro;
use App\Usuario;
use Response;

class EmprestimosController extends Controller{
  
  public function __construct()
    { 
      $this->middleware('auth');
    }
  
  // CREATE
   public function cadastrarNovo(){
      $usuarios = Usuario::all();
      $livros = Livro::all();
      return view('emprestimos.cadastrarNovo',compact('livros','usuarios'));
    }

    public function BDcadastrarNovo(){

      $livro = Livro::where('id','=',request('idLivro'));

      $livro->update([
        'status' => 'Emprestado'
      ]);

      Emprestimo::create([
        //'data_inicio' => request(''),
        //'data_fim' => request(''),
        'status' => 'Ativo',
        'id_usuario' => request('idUsuario'),
        'id_livro' => request('idLivro')
      ]);
       return redirect('/emprestimos/lista');
    }
  
  // READ
  public function lista(){
    $emprestimos = Emprestimo::orderBy('created_at')->get();
    return view('emprestimos.lista',compact('emprestimos'));
    //dd($emprestimos);
  }
  
  public function encontraLivros(Usuario $usuario){
    $livros = Livro::where('nivel','<=',$usuario->nivel)->where('status','=','Disponivel')->get();

    return Response::json($livros);
  }
  
  
  
  // UPDATE
  public function arquivar(Emprestimo $emprestimo){
    return view('emprestimos.arquivar',compact('emprestimo'));
  }
  
  public function BDarquivar(Emprestimo $emprestimo){
    $emprestimo->livro->update([
      'status'=>'Disponivel'
    ]);
    $emprestimo->update([
      'status' => 'Arquivado'
    ]);
    return redirect('/emprestimos/lista');
  }
  
  // DELETE
  public function deletar(Emprestimo $emprestimo){
    return view('emprestimos.deletar',compact('emprestimo'));
  }
  
  public function BDdeletar(Emprestimo $emprestimo){
    $emprestimo->delete();
    return redirect('/emprestimos/lista');
  }
  
}
