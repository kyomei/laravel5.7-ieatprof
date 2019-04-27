@extends('painel.layouts.principal')

@section('title', 'Listagem de usuários')
@section ('nav-active', 'usuarios')

@section('conteudo')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 float-left">Listagem de usuários</h1>
<a href="{{action('UsuariosController@adicionar')}}" class="btn btn-primary btn-icon-split float-right" data-modal="user-add">
	<span class="icon text-white-50"><i class="fas fa-plus"></i></span>
	<span class="text">Adiciona</span>
</a>

<div class="clearfix"></div>
<hr />

<table class="table table-hover bg-white table-striped">
    <thead class="thead-dark">
      <tr>
      	<th>#</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Tipo</th>
        <th class="text-center">Ações</th>
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
	        <td class="text-center">
	        	<a href="{{action('UsuariosController@editar')}}" data-toggle="tooltip" title="Editar"><i class="fas fa-pencil-alt text-warning mr-1"></i></a>
	        	<a href="{{action('UsuariosController@excluir')}}" data-toggle="tooltip" title="Excluir"><i class="fas fa-trash text-danger"></i></a></td>
	      </tr>
      @endforeach
      <!-- End .\ Listagem dos usuarios -->
    </tbody>
 </table>
Exibindo 5 de 25 registros
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Próximo</a>
    </li>
  </ul>
</nav>
@stop