@extends('layouts.app') 
@section('content')

<style>
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
</style>
<body class="text-center">
<div class="container">

    <p>Para configurar o acesso do usuário {{$usuario->nome}}, basta escolher algum dos Logins disponíveis.</p> 

    <form class="form-signin" method="POST" action="/usuarios/{{$usuario->id}}/BDconfigurarAcesso">

        {{ csrf_field() }}

        <select name="user" id="user" class="form-control" required>
            <option value="" selected disabled> Logins Disponiveis </option>
            @foreach($users as $user)
                @if($user->usuario == null)
                    <option value="{{$user->id}}"> {{$user->email}} </option>
                @endif
            @endforeach
        </select>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Configurar Acesso</button>
    </form>

    <p>caso esse usuário ainda não possua um login para ele, crie um login na página de registro. </p>
    <p>OBS: futuramente será possível cadastrar um novo login sem a necessidade de deslogar, mas isso ainda não foi implementado</p>

</div>
</body>
@endsection