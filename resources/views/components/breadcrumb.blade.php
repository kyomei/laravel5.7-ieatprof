
<?php //echo url()->full(); ?>
{{ Request::segment(2)}}
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item {{ Request::segment(1) === null ? 'active' : null }}"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Cursos</a></li>
    <li class="breadcrumb-item">Cursos livres2</li>
  </ol>
</nav>