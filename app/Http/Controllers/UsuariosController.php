<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\User;

class UsuariosController extends Controller{
  
  public function __construct()
    {
      //$this->middleware('auth', 'except' => 'lista');  
      $this->middleware('auth');
    }
  
  // CREATE
  public function cadastrarNovo(){
    return view('usuarios.cadastrarNovo');
  }
  
  public function BDcadastrarNovo(){
    Usuario::create([
      'nome' => request('nome'),
      'documento' => request('documento'),
      'nivel' => request('nivel')      
    ]);
     return redirect('/usuarios/lista');
  }
  
  
  // READ
  public function lista(){
    $usuarios = Usuario::all();
    return view('usuarios.lista',compact('usuarios'));
  }
  
  
  // UPDATE
  public function editar(Usuario $usuario){
    return view('usuarios.editar',compact('usuario'));
  }
  
  public function BDeditar(Usuario $usuario){
    $usuario->update([
      'nome' => request('nome'),
      'documento' => request('documento'),
      'nivel' => request('nivel')  
    ]);
    return redirect('/usuarios/lista');
  }
  
  // DELETE
  public function deletar(Usuario $usuario){
    return view('usuarios.deletar',compact('usuario'));
  }
  
  public function BDdeletar(Usuario $usuario){
    $usuario->delete();
    return redirect('/usuarios/lista');
  }

  //CONTROLE DE ACESSO
  public function controleAcesso(){
    $usuarios = Usuario::all();
    return view('usuarios.controleAcesso',compact('usuarios'));
  }

  public function configurarAcesso(Usuario $usuario){
    $users = User::all();
    return view('usuarios.configurarAcesso',compact('usuario','users'));
  }

  public function BDconfigurarAcesso(Usuario $usuario){
    $usuario->update([
      'id_user' => request('user')
    ]);
    return redirect('/usuarios/controleAcesso');
  }
}
