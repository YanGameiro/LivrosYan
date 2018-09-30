@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">nome</th>
              <th scope="col">autor</th>
              <th scope="col">ano</th>
              <th scope="col">status</th>
              <th scope="col">nivel</th>
              <th scope="col"> </th>
              <th scope="col"> </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($livros as $livro)
            <tr>
              <td>{{$livro->nome}}</td>
              <td>{{$livro->autor}}</td>
              <td>{{$livro->ano}}</td>
              <td>{{$livro->status}}</td>
              <td>{{$livro->nivel}}</td>


              <td>
                <a href="/livros/{{ $livro->id }}/editar">
                                        <button  type="button" class="btn btn-warning">Editar</button>
                                    </a>
              </td>
              <td>
                <a href="/livros/{{ $livro->id }}/deletar">
                                        <button type="button" class="btn btn-danger">Deletar</button>
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