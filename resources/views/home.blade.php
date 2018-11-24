@extends('layouts.principal')

@section('title', 'Página inicial')


@section('conteudo')
    @include('layouts.carousel')

     @component('components.breadcrumb') 
    
    @endcomponent
@stop