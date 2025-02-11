@extends('layouts.app')

@section('content')
    <section class="checkout-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Coluna com descrição -->
                <div class="col-lg-8 col-md-12">
                    <h1 class="fw-bold text-uppercase">Soft Skills</h1>
                    <p class="lead">
                        Elencadas pela UNESCO como as 12 habilidades essenciais para o futuro, este curso de Soft Skills
                        oferece as ferramentas necessárias para que você se torne um verdadeiro cidadão global. Além disso,
                        você contará com mentorias mensais ao vivo e síncronas, criadas especialmente para ajudá-lo a
                        solidificar todo o aprendizado e aplicar os conhecimentos adquiridos de forma prática e eficaz.
                    </p>
                    <hr class="border-light">
                    <p class="small">Baseado em 14 avaliações</p>
                    <button class="btn btn-light mt-2">Compartilhar</button>
                </div>

                <!-- Coluna com informações do curso -->
                    <div class="col-lg-4 col-md-12">
    <div class="checkout-card shadow-lg border-0 p-1 bg-white text-dark">
        <!-- Vídeo no header do card -->
        <div class="checkout-card-header">
            <video src="{{ asset('arquivos/videos/curso_video_exemplo.mp4') }}" autoplay loop muted class="video-header rounded-3" alt="Curso Soft-skills"></video>
        </div>

        <!-- Informações do curso -->
        <div class="mt-3">
            <ul class="list-unstyled">
                <li><i class="fas fa-clock text-primary"></i> 12 horas de carga horária</li>
                <li><i class="fas fa-users text-primary"></i> 3.621 alunos</li>
                <li><i class="fas fa-book text-primary"></i> 15 aulas</li>
                <li><i class="fas fa-cogs text-primary"></i> 13 módulos de conteúdo</li>
                <li><i class="fas fa-calendar-alt text-primary"></i> Última atualização: 21/01/2025</li>
                <li><i class="fas fa-certificate text-primary"></i> Certificado de conclusão</li>
                <li><i class="fas fa-download text-primary"></i> 12 arquivos para download</li>
            </ul>
            <a href="{{ route('pages.checkout') }}" class="btn btn-danger w-100 fw-bold">Comprar agora</a>
        </div>
    </div>
</div>

            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#E30613" fill-opacity="1"
            d="M0,256L48,261.3C96,267,192,277,288,240C384,203,480,117,576,74.7C672,32,768,32,864,32C960,32,1056,32,1152,58.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>

    <div class="container my-5">
        @include('elements.custom-ui.card-skills')
        @include('elements.custom-ui.skills')
    </div>

    <div class="text-center">
        <img src="{{ asset('arquivos/imagens/desempenho.png') }}" alt="Desempenho" class="img-fluid w-50">
    </div>
@endsection
