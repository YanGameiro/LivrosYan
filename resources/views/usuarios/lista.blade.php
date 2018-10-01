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
              <th scope="col">documento</th>
              <th scope="col">nivel</th>
              <th scope="col"> </th>
              <th scope="col"> </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
              <td>{{$usuario->nome}}</td>
              <td>{{$usuario->documento}}</td>
              <td>{{$usuario->nivel}}</td>


              <td>
                <a href="/usuarios/{{ $usuario->id }}/editar">
                                        <button  type="button" class="btn btn-warning">Editar</button>
                                    </a>
              </td>
              <td>
                <a href="/usuarios/{{ $usuario->id }}/deletar">
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