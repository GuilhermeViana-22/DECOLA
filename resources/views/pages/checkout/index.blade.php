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
                    <div class="checkout-card shadow-lg border-0 bg-white text-dark">
                        <!-- Vídeo no header do card -->
                        <div class="checkout-card-header">
                            <video src="{{ asset('arquivos/videos/curso_video_exemplo.mp4') }}" autoplay loop muted
                                class="video-header" alt="Curso Soft-skills"></video>
                        </div>

                        <!-- Informações do curso -->
                        <div class="mt-3">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-clock text-secondary skill"></i> 12 horas de carga horária</li>
                                <li><i class="fas fa-users text-secondary skill"></i> 3.621 alunos</li>
                                <li><i class="fas fa-book text-secondary skill"></i> 15 aulas</li>
                                <li><i class="fas fa-cogs text-secondary skill"></i> 13 módulos de conteúdo</li>
                                <li><i class="fas fa-calendar-alt text-secondary skill"></i> Última atualização: 21/01/2025</li>
                                <li><i class="fas fa-certificate text-secondary skill"></i> Certificado de conclusão</li>
                                <li><i class="fas fa-download text-secondary skill"></i> 12 arquivos para download</li>
                            </ul>
                            <a href="{{ route('pages.checkout') }}" class="btn w-100 fw-bold">Comprar agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
