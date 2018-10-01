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
              <th scope="col">email de acesso</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
              <td>{{$usuario->nome}}</td>
              <td>{{$usuario->documento}}</td>
              <td>{{$usuario->nivel}}</td>
              <td>
                @if($usuario->id_user != 0)
                    {{$usuario->user->email}}
                @else
                    <a href="">
                        <button  type="button" class="btn btn-warning">Configurar Acesso</button>
                    </a>
                @endif
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