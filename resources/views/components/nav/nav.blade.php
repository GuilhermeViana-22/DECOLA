<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="navbar-logo" src="{{ asset('arquivos/logos/1.png') }}" alt="Logo">
        </a>

        <!-- BOTÃO DO MENU MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Início <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#missao">Nossa missão</a>
                </li>

                <!-- DROPDOWN CURSOS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="cursoDrop" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('home') }}#cursos">Cursos disponíveis</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.certificados') }}">Certificados</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('instrutores') }}">Instrutores</a>
                </li>

                <!-- DROPDOWN UNIDADES -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownUnidades" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Unidades
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('unidades') }}">Nossas unidades</a></li>
                        <li><a class="dropdown-item" href="{{ route('unidades-3d') }}">Explorar projeto 3D</a></li>
                    </ul>
                </li>

                <!-- BOTÃO DE MATRÍCULA -->
                <li class="nav-item">
                    <a class="btn btn-danger my-2 my-sm-0" href="https://decola.eadplataforma.app/register" role="button">
                        <i class="bi bi-person me-2"></i> Fazer Matrícula
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
