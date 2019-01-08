@extends('layouts.principal')

@section('title', 'Quem somos')


@section('conteudo')
@component('components.breadcrumb') 
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active">Quem somos</li>
@endcomponent


@stop