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
      <p> Você term certeza que deseja deletar esse empréstimo? </p>
      <p> Essa ação não poderá ser desfeita, e todos os dados desse empréstimo serão perdidos!</p>
      <p> Essa ação só é recomendada nos casos em que esse registro de empréstimo é resultado de um erro de digitação! </p>
      <p> se o usuário devolveu o livro, esse emprestimo deve ser arquivoado, e não deletado.</p>
      </ul>
          <a href="/emprestimos/{{ $emprestimo->id }}/BDdeletar">
            <button type="button" class="btn btn-danger">Deletar</button>
        </a>
    </div>
  </div>
</div>
@endsection