@extends('layouts.principal')

@section('title', 'Mural de notícias')


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

<!--Carousel Wrapper-->
<div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
    <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
    <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides and lightbox-->

  <div class="carousel-inner mdb-lightbox" role="listbox">
    <div id="mdb-lightbox-ui"></div>
    <!--First slide-->
    <div class=" carousel-item active text-center">

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(2).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(2).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(4).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(4).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(6).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(6).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(10).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(10).jpg" class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(12).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(12).jpg" class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(14).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(14).jpg" class="img-fluid">
        </a>
      </figure>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item text-center">

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(22).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(22).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(25).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(25).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(29).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(29).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(31).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(31).jpg" class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(32).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(32).jpg" class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(33).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(33).jpg" class="img-fluid">
        </a>
      </figure>

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item text-center">

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(44).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(44).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(66).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(66).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(53).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(53).jpg" class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(56).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(56).jpg" class="img-fluid">
        </a>
      </figure>
      <figure class="col-md-4 d-md-inline-block">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(77).jpg" data-size="1600x1067">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(77).jpg" class="img-fluid">
        </a>
      </figure>

    </div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
@stop