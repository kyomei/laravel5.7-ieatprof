@extends('layouts.principal')

@section('title', 'Cursos livres')

@section('conteudo')
@component('components.breadcrumb') 
<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{url('cursos/')}}">Cursos</a></li>
<li class="breadcrumb-item active">Cursos livres</li>
@endcomponent

<div class="jumbotron area-course-qtde text-center bg-white">
    <h2><span class="count">{{count($modulos)}}</span> cursos livres</h2>
    <div class="line"></div>
    <span class="lead">Cursos profissionalizantes</span>
</div>
<section class="area-course">
    <div class="container">
        <h1>Listagem de cursos livres</h1>
        <!-- list cursos  --> 
        <div class="row">
            @foreach ($modulos as $modulo)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <article class="card-curso {{$modulo->color_class_modulo}}">
                    <a href="https://ieatprofissionalizante.com.br/cursos/cursos-livres/{{$modulo->slug_modulo}}" alt="Curso 3D Studio Max" title="Curso 3D Studio Max">
                        <img src="https://ieatprofissionalizante.com.br/assets/img/cursos/{{$modulo->slug_modulo}}.png" class="img-fluid">
                        <div class="overlay">
                            <div class="overlay-content">
                                <strong>{{$modulo->nome_modulo}}</strong>
                                <div class="info-secondary">Por R$ 119,99 mensais</div>
                            </div>
                            <div class="plus-sign">+</div>
                        </div>
                     </a>
                </article>
            </div> 
            @endforeach         
        </div>
    </div>
</section>
@stop