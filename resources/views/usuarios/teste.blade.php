@extends('layouts.app') 
@section('content')
<ul>
  <li>User Logado: {{Auth::user()->email}}</li>
  <li>Usuario atrelado ao User logado: Nome: {{Auth::user()->usuario->nome}} - Nivel: {{Auth::user()->usuario->nivel}}</li>
  <li></li>
  <li></li>
  <li></li>
</ul>
@endsection