@extends ('layouts.app') 
@section ('content')
<title>Cadastro Novo Emprestimo</title>

<style>
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
</style>

<body class="text-center">
  <form class="form-signin" method="POST" action="/emprestimos">
    {{ csrf_field() }}
    <h1 class="h3 mb-3 font-weight-normal">cadastro Novo Emprestimo</h1>
       
    <select name="idUsuario" id="idUsuario" class="form-control" required>
      <option value="" selected disabled> Usuario </option>
      @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}"> {{$usuario->nome}} </option>
      @endforeach
    </select>

    <select value="" name="idLivro" id="idLivro" class="form-control" required>
    <option disabled selected>  Primeiro escolha um usuario.  </option>
    </select>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Emprestar</button>
  </form>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    // nessa parte, usei esse tutorial: https://youtu.be/FY6Pmrmz0Ws
    $('#idUsuario').on('change',function(e){
      //console.log(e);
      
      var idUsuario = e.target.value;
      
      console.log(idUsuario);
      
      //ajax
      $.get('/ajax-encontra/' + idUsuario, function(data){
        //console.log(data);

        $('#idLivro').empty();
        $('#idLivro').append('<option value="" disabled selected>Livro</option>');
        $.each(data, function(cadastroNovo, livroObj){

          $('#idLivro').append('<option value="' + livroObj.id + '"> ' + livroObj.nome + ' ('  + livroObj.autor + ', ' + livroObj.ano + ') ' + ' </option>');

        });
      });
    });
    
  </script>
  
</body>

@endsection