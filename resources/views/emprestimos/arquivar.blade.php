@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Código do empréstimo</th>
              <th scope="col">Usuario</th>
              <th scope="col">Livro</th>
              <th scope="col">Status do emprestimo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$emprestimo->id}}</td>
              <td>{{$emprestimo->usuario->nome}}</td>
              <td>{{$emprestimo->livro->nome}}</td>
              <td>{{$emprestimo->status}}</td>
              <td>
              </td>
          </tbody>
        </table>
      </div>
      <p> Você term certeza que deseja arquivar esse empréstimo? </p>
      <p> Arquivar o empréstimo é uma ação recomendada quando o usuário devolve o livro e o empréstimo em questão acaba.</p>
      <p> Consequências de arquivar o empréstimo: </p>
      <ul> 
        <li> O Livro emprestado voltará a ficar Disponível;</li>
        <li> O empréstimo de código {{$emprestimo->id}} ficará marcado como "Arquivado" na lista de empréstimos;</li>
      </ul>
          <a href="/emprestimos/{{ $emprestimo->id }}/BDarquivar">
            <button type="button" class="btn btn-danger">Arquivar</button>
        </a>
    </div>
  </div>
</div>
@endsection