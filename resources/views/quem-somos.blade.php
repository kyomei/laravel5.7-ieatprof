@extends('layouts.principal')

@section('title', 'Quem somos')


@section('conteudo')
@component('components.breadcrumb') 
<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
<li class="breadcrumb-item active">Quem somos</li>
@endcomponent
<!-- START CONTENT QUEM SOMOS -->
<section class="area-about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>QUEM SOMOS</h1>
                <p>O Instituto Educacional Alto Tiete atua desde 2008 oferecendo educa&ccedil;&atilde;o continuada e proporcionando aos nossos alunos ensino de alt&iacute;ssima qualidade e toda infra-estrutura necess&aacute;ria.</p>
                <p>Somos uma empresa focada em solu&ccedil;&otilde;es para atender jovens e adultos, garantindo assim seu sucesso profissional e social.<br />Hoje contamos com mais de 6.000 alunos formados e atuando com responsabilidade e efici&ecirc;ncia nas mais diversas &aacute;reas.<br />Proporcionar Educa&ccedil;&atilde;o continuada de Qualidade trata-se de um desafio de grandes propor&ccedil;&otilde;es, sem d&uacute;vida, mas algo perfeitamente fact&iacute;vel.<br />Durante todo o tempo deste desafio, haver&aacute; sempre algu&eacute;m a orientar, encorajar, apoiar e assessorar os estudos.</p>
                <p>Nossa Miss&atilde;o</p>
                <p>Promover educa&ccedil;&atilde;o tecnol&oacute;gica em n&iacute;vel avan&ccedil;ado, desenvolvendo compet&ecirc;ncias t&eacute;cnicas e comportamentais dos nossos alunos, para alcan&ccedil;ar sucesso pessoal e profissional.</p>
                <p>EDUCAR &Eacute; UM DEVER. APRENDER &Eacute; UMA LI&Ccedil;&Atilde;O.</p></p>
            </div>
        </div>
    </div>    
</section>
<!-- END./ CONTENT QUEM SOMOS -->


@stop