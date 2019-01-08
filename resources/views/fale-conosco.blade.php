@extends('layouts.principal')

@section('title', 'Fale conosco')



@section('conteudo')
@component('components.breadcrumb') 
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active">Fale conosco</li>
@endcomponent

@stop