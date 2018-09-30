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
              <th scope="col">Usuário</th>
              <th scope="col">Livro</th>
              <th scope="col">Status do Emprestimo</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($emprestimos as $emprestimo)
            <tr>
              <td>{{$emprestimo->id}}</td>
              <td>{{$emprestimo->usuario->nome}}</td>
              <td>{{$emprestimo->livro->nome}}</td>
              <td>{{$emprestimo->status}}</td>
              <td>
                @if ($emprestimo->status != 'Arquivado')
                  <a href="/emprestimos/{{ $emprestimo->id }}/arquivar">
                    <button  type="button" class="btn btn-warning">Arquivar</button>
                  </a>
                @endif
              </td>
              <td>
                <a href="/emprestimos/{{ $emprestimo->id }}/deletar">
                  <button  type="button" class="btn btn-danger">Deletar</button>
                </a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection