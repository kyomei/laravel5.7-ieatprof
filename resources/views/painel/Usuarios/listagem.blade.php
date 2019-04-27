@extends('painel.layouts.principal')

@section('title', 'Listagem de usuários')
@section ('nav-active', 'usuarios')

@section('conteudo')

<!-- Start .\ alert erro ao cadastrar usuário -->
@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul> 
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
	</div>
@endif
<!-- End .\ alert erro ao cadastrar usuário -->
<!-- Start .\ alert do anúncio excluído ou adicionado com sucesso -->
  @if(Session::has('status'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      {!! Session::get('status') !!}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <!-- End .\ alert do anúncio excluído ou adicionado com sucesso -->  

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 float-left">Listagem de usuários</h1>
<a href="{{action('UsuariosController@adicionar')}}" class="btn btn-primary btn-icon-split float-right" data-modal="modal_usuarioAdicionar">
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
      @foreach($usuarios as $key => $user)
	      <tr>
	      	<td>{{++$key}}</td>
	        <td>{{$user->nome}}</td>
	        <td>{{$user->email}}</td>
	        <td>{{($user->cargo == 'admin'?'Administrador':'Usuário')}}</td>
	        <td class="text-center">
	        	<a href="{{action('UsuariosController@editar', [$user->id])}}" data-toggle="tooltip" title="Editar" data-modal="modal_usuarioEditar"><i class="fas fa-pencil-alt text-warning mr-1"></i></a>
	        	<a href="{{action('UsuariosController@excluir', [$user->id])}}" data-toggle="tooltip" title="Excluir" data-modal="modal_usuarioExcluir"><i class="fas fa-trash text-danger"></i></a></td>
	      </tr>
      @endforeach
      <!-- End .\ Listagem dos usuarios -->
    </tbody>
 </table>

<div class="clearfix">
	<div class="float-left">Exibindo {{($total < 10) ? $total : $perPage}} de {{$total}} registros</div>
	<div class="float-right">
		@if($total > 10)
		<nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-end">
		    <li class="page-item disabled">
		      <a class="page-link" href="#" tabindex="-1">Anterior</a>
		    </li>
		    <li class="page-item active"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item">
		      <a class="page-link" href="#">Próximo</a>
		    </li>
		  </ul>
		</nav>
		@endif
	</div>
</div>
<div id="modal-area"></div>
@stop