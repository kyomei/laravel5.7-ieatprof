@extends('layouts.principal')

@section('title', 'Mural de notícias')


@section('conteudo')
@component('components.breadcrumb') 
<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
<li class="breadcrumb-item active">Mural</li>
@endcomponent
<!-- START CONTENT MURAL -->
<section class="area-timelane">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h4>Mural de notícias</h4>
                <ul class="timeline">
                    <li>
                        <a target="_blank" href="https://www.totoprayogo.com/#">Aviso feriado dia 25 de Janeiro</a>
                        <a href="#" class="float-right">25 Janeiro, 2019</a>
                        <p>Devido ao feriado do dia 25 de Janeiro, a escola não abrirá, voltaremos normalmente no dia 26.</p>
                    </li>
                    <li>
                        <a href="#">21 000 Job Seekers</a>
                        <a href="#" class="float-right">4 March, 2014</a>
                        <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <a href="#">Awesome Employers</a>
                        <a href="#" class="float-right">1 April, 2014</a>
                        <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>

@stop