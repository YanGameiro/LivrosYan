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
              <th scope="col">login</th>
              <th scope="col">nivel</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$usuario->nome}}</td>
              <td>{{$usuario->login}}</td>
              <td>{{$usuario->nivel}}</td>

            </tr>
          </tbody>
        </table>
      </div>
      Você tem certeza que deseja deletar o registro acima? isso não poderá ser desfeito.
        <a href="/usuarios/{{ $usuario->id }}/BDdeletar">
            <button type="button" class="btn btn-danger">Deletar</button>
        </a>
    </div>
  </div>
</div>
@endsection