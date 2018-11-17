@extends('layouts.principal')

@section('title', 'Cursos livres')

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
@stop
@section('conteudo')
    
    <h1>Listagem de cursos livres</h1>
    <table class="table table-striped table-bordered table-hover">            
        @foreach ($modulos as $modulo)
            <tr>
                <td>{{ $modulo->nome_modulo }}</td>
                <td><a href="/cursos/cursos-livres/{{ $modulo->slug_modulo }}">Visualizar</a></td>
            </tr>
        @endforeach 
    </table>
@stop