@extends('painel.layouts.principal')

@section('title', 'Listagem de usuários')
@section ('nav-active', 'usuarios')

@section('conteudo')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Listagem de usuários</h1>
<hr />

<table class="table table-hover bg-white table-striped">
    <thead class="thead-dark">
      <tr>
      	<th>#</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Tipo</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <!-- Start .\ Listagem dos usuarios -->
      @foreach($usuarios as $user)
	      <tr>
	      	<td>1</td>
	        <td>{{$user->nome}}</td>
	        <td>{{$user->email}}</td>
	        <td>{{($user->cargo == 'admin'?'Administrador':'Usuário')}}</td>
	        <td>f</td>
	      </tr>
      @endforeach
      <!-- End .\ Listagem dos usuarios -->
    </tbody>
  </table>
@stop