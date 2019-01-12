  
<!-- Navigation -->

<nav class="navbar navbar-dark navbar-expand bg-dark ">
    <div class="container">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::segment(1) === null ? 'active' : null }}">
                <a class="nav-link" href="{{url('/')}}">Home  <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'quem-somos' ? 'active' : null }}">
                <a class="nav-link" href="{{url('quem-somos')}}">Quem somos</a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'fale-conosco' ? 'active' : null }}">
                <a class="nav-link" href="{{url('fale-conosco')}}">Fale conosco</a>
            </li>
            <li class="nav-item dropdown {{ Request::segment(1) === 'cursos' ? 'active' : null }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cursos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('cursos/cursos-livres')}}">Cursos livres</a>
                    <a class="dropdown-item" href="{{url('cursos/pacote-de-cursos')}}">Pacote de cursos</a>
                </div>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'mural' ? 'active' : null }}">
                <a class="nav-link" href="{{url('mural')}}">Mural  <span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- End.\ Navigation -->