<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('arquivos/logos/1.png') }}" width="20%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- Início -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">Início <span class="sr-only">(current)</span></a>
        </li>

        <!-- Unidades -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Nossa missão</a>
        </li>

        <!-- Quem Somos -->
        <li class="nav-item dropdown">
          <a id="cursos" class="nav-link dropdown-toggle" id="cursoDrop" role="button" data-toggle="dropdown"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="{{ route('home') }}">Cursos</a>
          <div class="dropdown-menu" aria-labelledby="cursoDrop">
            <a class="dropdown-item" href="{{ route('home') }}">Cursos disponíveis</a>
            <a class="dropdown-item" href="{{ route('pages.certificados') }}">Certificados</a>
          </div>
        </li>

        <li class="nav-item">
            <a id="cursos" class="nav-link" href="{{ route('instrutores') }}">Instrutores</a>
          </li>


        <!-- Unidades com Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUnidades" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidades
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownUnidades">
            <a class="nav-link" href="{{ route('unidades') }}">Nossas unidades</a>
            <a class="nav-link" href="{{ route('unidades-3d') }}">Explorar projeto 3D</a>
          </div>
        </li>

        <!-- Portal do Fiqueado com Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFiqueado" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Portal do aluno
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownFiqueado">
            <a class="dropdown-item" href="{{ route('portal-do-franqueado') }}">Acessar</a>
            <a class="dropdown-item" href="{{ route('portal-do-franqueado.suporte') }}">Suporte</a>
          </div>
        </li>

        <!-- Botão Fazer Matrícula -->
        <li class="nav-item">
          <a class="btn btn-danger my-2 my-sm-0" href="https://decola.eadplataforma.app/register" role="button">       <i class="bi bi-person me-2"></i> Fazer Matrícula</a>
        </li>
      </ul>
    </div>
</nav>


