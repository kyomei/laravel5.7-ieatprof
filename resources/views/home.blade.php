@extends('layouts.principal')

@section('title', 'Página inicial')


@section('conteudo')
@include('layouts.carousel')

<!-- START CARDS-CURSO -->
<section class="area-option-course">
    <div class="container">
        <h2>Conheça nossas opções de cursos </h2>
        <hr class="hr-custom">
        <div class="row">
            <div class="col-md-6">
                <div class="bg-white card-home rounded">
                    <div class="icone"><i class="fas fa-graduation-cap fa-3x"></i></div>
                    <div class="descricao">
                        <h3>Cursos livres</h3>
                        <p>Temos cursos rápidos e completos, com aulas interativas e intuitivas e com preços que cabe no seu bolso, faça já sua inscrição e esteja preparado para novas oportunidades.</p>
                        <p class="text-right"><a class="btn bg-green-thema" href="https://ieatprofissionalizante.com.br/cursos/cursos-livres" role="button">Ver cursos &raquo;</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white card-home rounded">
                    <div class="icone"><i class="fas fa-cube fa-3x"></i></div>
                    <div class="descricao">
                        <h3>Pacote de cursos</h3>
                        <p>Conheça nossos pacotes de cursos feitos para você, aqui você encontra cursos completos de Informática, Auxiliar Administrativo, Inglês, Como ser Youtuber e entre outros.</p>
                        <p class="text-right"><a class="btn bg-green-thema" href="https://ieatprofissionalizante.com.br/cursos/pacote-de-cursos" role="button">Ver cursos &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /END CARDS-CURSOS -->
@stop