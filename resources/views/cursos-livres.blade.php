@extends('layouts.principal')

@section('title', 'Cursos livres')

@section('conteudo')
@component('components.breadcrumb') 
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('cursos/')}}">Cursos</a></li>
    <li class="breadcrumb-item active">Cursos livres</li>
@endcomponent
<div class="container">
    <h1>Listagem de cursos livres</h1>
    <!-- list cursos  --> 
    <article>
        <img src="https://ieatprofissionalizante.com.br/assets/img/cursos/agente-de-turismo.png"/>
    </article>
    <table class="table table-striped table-bordered table-hover">            
        @foreach ($modulos as $modulo)
        <tr>
            <td>{{ $modulo->nome_modulo }}</td>
            <td><a href="/cursos/cursos-livres/{{ $modulo->slug_modulo }}">Visualizar</a></td>
        </tr>
        @endforeach 
    </table>
</div>
@stop